<?php

namespace App\Http\Controllers\Frontend;

use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use App\Core\Utility;
use App\Frontend\Exhibition\ExhibitionExhibitor;
use App\Frontend\Exhibition\ExhibitorRepositoryInterface;
use App\Frontend\Infrastructure\Forms\ExhibitorEntryFormRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\Backend\Page\PageRepository;
use App\Backend\Post\PostRepository;
use Illuminate\Support\Facades\Route;
use App\Frontend\Exhibition\ExhibitorRepository;
use App\Backend\SponsorPackageType\SponsorPackageTypeRepository;

class ExhibitionController extends Controller
{
    private $exhibitorRepository;

    public function __construct(ExhibitorRepositoryInterface $exhibitorRepository)
    {
        $this->exhibitorRepository = $exhibitorRepository;
    }

    public function index(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);
        
        //start sponsor logos
        $exhibitorRepo  = new ExhibitorRepository();
        $exhibitors     = $exhibitorRepo->getConfirmedExhibitors();

        $sponsorPackageTypeRepo  = new SponsorPackageTypeRepository();
        $sponsorPackages         = $sponsorPackageTypeRepo->getArrays();

        $exhibitorArray = array();

        //make sub-array with each of sponsor package name in array $exhibitorArray
        foreach($sponsorPackages as $sponsorPackage){
            $exhibitorArray[$sponsorPackage->name] = array();
        }

        //loop through each exhibitor and group under each sponsor type name
        foreach($exhibitors as $exhibitor){
            foreach($sponsorPackages as $sponsorPackage){
                if($exhibitor->business_type == $sponsorPackage->id){                    
                    // $exhibitorArray[$sponsorPackage->name] = $exhibitor;
                    array_push($exhibitorArray[$sponsorPackage->name], $exhibitor);
                }
            }
        }
        //end sponsor logos

        return view('frontend.exhibition.exhibition')
            ->with('page',$page)
            ->with('posts',$posts)
            ->with('exhibitorArray',$exhibitorArray);
    }

    public function exhibition_sponsorship(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.exhibition.exhibition_sponsorship')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function exhibition_booth(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.exhibition.exhibition_booth')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function exhibition_floor_plan(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.exhibition.exhibition_floor_plan')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function exhibition_agreement(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.exhibition.exhibition_agrement')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function all_exhibitor(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $exhibitors     = $this->exhibitorRepository->getExhibitor();
                return view('backend.exhibitor_registration.index',compact('exhibitors'));
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/post');
        }
    }

    public function exhibitor_status_change($status,$id)
    {
        if ($status == 2) {
            ExhibitionExhibitor::where('id', $id)->update(['status' => $status]);
            $exhibitionExhibitors = ExhibitionExhibitor::find($id);
            $email = $exhibitionExhibitors->email;

            //get params for email template
            $first_name     = $exhibitionExhibitors->first_name;
            $middle_name    = $exhibitionExhibitors->middle_name;
            $last_name      = $exhibitionExhibitors->last_name;
            $organization   = $exhibitionExhibitors->organization;
            $user_email     = $exhibitionExhibitors->email;

            $type           = $exhibitionExhibitors->business_type;

            //start calculation for amount            
            //get all package types
            $sponsorPackageTypes = DB::select('SELECT * FROM sponsor_package_type');

            //get package type of current exhibitor by id
            $exhibitorPackageType = DB::select("SELECT * FROM sponsor_package_type WHERE `id` = $type LIMIT 1");
            $exhibitorPackageTypeObj = $exhibitorPackageType[0]; //only one record
            
            $fee_amount = $exhibitorPackageTypeObj->amount;

            //add currency units
            if($exhibitorPackageTypeObj->currency == "usd"){
                $currency_unit = "$ ";
            }
            else{
                $currency_unit = "MMK ";
            }
            //end calculation for amount

            //continue params for email template
            $amount     = $currency_unit.$fee_amount;
            $category   = $exhibitorPackageTypeObj->name;
            //end params for email template->email;

            //start sending email to user
            $template = "backend/exhibitionconfirmuseremail/exhibitionconfirmuseremail";
            $subject = "CONSAL XVII Registration Payment Confirmation";

            //build param array for email
            $email_param_array = ['first_name'=>$first_name, 'middle_name'=>$middle_name, 'last_name'=>$last_name, 'organization'=>$organization, 'category'=>$category, 'user_email'=>$user_email, 'amount'=>$amount];
            
            Utility::sendEmailWithParameters($template, $email_param_array, $email, $subject);
            //end sending email to user

            //start sending email to admin
            $adminEmailRaw = DB::select("SELECT * FROM event_emails WHERE deleted_at IS NULL AND type = 2");
            $adminEmailArr = array();
            foreach ($adminEmailRaw as $eRaw) {
                array_push($adminEmailArr, $eRaw->email);
            }

            $superadminEmailRaw = DB::select("SELECT * FROM event_emails WHERE deleted_at IS NULL AND type = 5");
            foreach ($superadminEmailRaw as $superRaw) {
                array_push($adminEmailArr, $superRaw->email);
            }
            if (isset($adminEmailArr) && count($adminEmailArr) > 0) {
                $template = "backend/exhibitionconfirmadminemail/exhibitionconfirmadminemail";
                $email = $adminEmailArr;
                $subject = "Hello World";

                Utility::sendEmail($template, $email, $subject);
            }
            //end sending email to admin
            alert()->success('Confirmation email has been sent to user.')->persistent('OK');
            return redirect()->action('Frontend\ExhibitionController@all_exhibitor')->with('status', $status);

        } elseif ($status == 3) {
            ExhibitionExhibitor::where('id', $id)->update(['status' => $status]);
                $exhibitionExhibitor = ExhibitionExhibitor::find($id);
                $email = $exhibitionExhibitor->email;
                //start sending email to user
                $template = "backend/exhibitioncanceluseremail/exhibitioncanceluseremail";
                $subject = "Hello World";
                Utility::sendEmail($template, $email, $subject);
                //end sending email to user

                //start sending email to admin
                $adminEmailRaw = DB::select("SELECT * FROM event_emails WHERE deleted_at IS NULL AND type = 2");
                $adminEmailArr = array();
                foreach ($adminEmailRaw as $eRaw) {
                    array_push($adminEmailArr, $eRaw->email);
                }

                $superadminEmailRaw = DB::select("SELECT * FROM event_emails WHERE deleted_at IS NULL AND type = 5");
                foreach ($superadminEmailRaw as $superRaw) {
                    array_push($adminEmailArr, $superRaw->email);
                }
                if (isset($adminEmailArr) && count($adminEmailArr) > 0) {
                    $template = "backend/exhibitioncanceladminemail/exhibitioncanceladminemail";
                    $email = $adminEmailArr;
                    $subject = "Hello World";

                    Utility::sendEmail($template, $email, $subject);
                }
                //end sending email to admin
                alert()->success('Cancellation email has been sent to user.')->persistent('OK');

                return redirect()->action('Frontend\ExhibitionController@all_exhibitor')->with('status', $status);
            }
    }


    public function exhibitor_detail($id){
        if (Auth::guard('User')->check()) {
            $exhibitor = $this->exhibitorRepository->getObjByID($id);
            return view('backend.exhibitor_registration.detail')->with('exhibitor',$exhibitor);
        }
        return redirect('/');
    }

    public function exhibition_exhibitor(){
        $sponsorPackageTypeRepo  = new SponsorPackageTypeRepository();
        $sponsorPackages         = $sponsorPackageTypeRepo->getArrays();
        return view('frontend.exhibition.exhibition_exhibitor')
                    ->with('sponsorPackages',$sponsorPackages);
    }

    public function exhibition_exhibitor_store(ExhibitorEntryFormRequest $request){
        
        $request->validate();
        
        $first_name = Input::get('first_name');
        $middle_name = Input::get('middle_name');
        $last_name = Input::get('last_name');
        $organization = Input::get('organization');
        $address = Input::get('address');
        $ph_no = Input::get('ph_no');
        $email = Input::get('email');
        $business_type = Input::get('business_type');

        // Start saving image
        $image = Input::file('image');
        $path = base_path().'/public/ExhibitorImages';

        if(Input::file()) {
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $exhibitor_image = '/ExhibitorImages/' . $image_name;
            $image->move($path, $image_name);
        }
        else{
            $exhibitor_image = null;
        }
        // End saving image

        $exhibitorObj = new ExhibitionExhibitor();
        $exhibitorObj->first_name   = $first_name;
        $exhibitorObj->middle_name  = $middle_name;
        $exhibitorObj->last_name    = $last_name;
        $exhibitorObj->organization = $organization;
        $exhibitorObj->address      = $address;
        $exhibitorObj->ph_no        = $ph_no;
        $exhibitorObj->email        = $email;
        $exhibitorObj->business_type= $business_type;
        $exhibitorObj->image        = $exhibitor_image;

        $result = $this->exhibitorRepository->create($exhibitorObj);


        if ($result['aceplusStatusCode'] == ReturnMessage::OK) {

            //start sending email to user
            $userEmailArr = array();
            $userEmailArr[0] = $email;

            $regPrefix      = Utility::getExhibitorRegistrationNumberPrefix();
            $resultObjId    = $result['resultObj']->id;

            if(isset($userEmailArr) && count($userEmailArr)>0){
                $template = "backend/exhibitionsubmituseremail/exhibitionsubmituseremail";
                $email = $userEmailArr;
                // $subject = "CONSAL XVII Exhibit Registration Confirmation:  xxxx (registration number)";
                $subject = "CONSAL XVII Exhibit Registration Confirmation:  ".$regPrefix.$resultObjId." (registration number)";

                Utility::sendEmail($template,$email,$subject);
            }
            //end sending email to user

            //start sending email to admin
            $adminEmailRaw = DB::select("SELECT * FROM event_emails WHERE deleted_at IS NULL AND type = 2");
            $adminEmailArr = array();
            foreach($adminEmailRaw as $eRaw){
                array_push($adminEmailArr,$eRaw->email);
            }

            $superadminEmailRaw = DB::select("SELECT * FROM event_emails WHERE deleted_at IS NULL AND type = 5");
            foreach($superadminEmailRaw as $superRaw){
                array_push($adminEmailArr,$superRaw->email);
            }
            if(isset($adminEmailArr) && count($adminEmailArr)>0){
                // $template = "backend/exhibitionsubmitadminemail/exhibitionsubmitadminemail";
                $template = "backend/adminemail/adminemail";
                $email = $adminEmailArr;
                $subject = "Notification Email";

                Utility::sendEmail($template,$email,$subject);
            }
            //end sending email to admin
            alert()->success('Registration successfully submitted. Please check your email for further information.')->persistent('OK');
            return redirect()->action('Frontend\ExhibitionController@exhibition_exhibitor')
                ->withMessage(FormatGenerator::message('Success', 'Exhibitor or Sponsor successfully created ...'));
        } else {
            return redirect()->action('Frontend\ExhibitionController@exhibition_exhibitor')
                ->withMessage(FormatGenerator::message('Fail', 'Exhibitor or Sponsor did not create ...'));
        }
    }

}
