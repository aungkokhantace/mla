<?php

namespace App\Http\Controllers\Frontend;

use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use App\Core\Utility;
use App\Frontend\ConferenceRegistration\ConferenceRegistration;
use App\Frontend\ConferenceRegistration\ConferenceRegistrationRepositoryInterface;
use App\Frontend\Infrastructure\Forms\RegistrationEntryFormRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Backend\Page\PageRepository;
use App\Backend\Post\PostRepository;
use Illuminate\Support\Facades\Route;

class RegistrationController extends Controller
{
    private $repo;

    public function __construct(ConferenceRegistrationRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }


    public function all_conference_reg(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $conference_registrations      = $this->repo->getConferenceRegistration();
                return view('backend.conference_registration.index')->with('conference_registrations', $conference_registrations);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/post');
        }
    }


    public function index(){
        $countries = $this->repo->getCountry();
        return view('frontend.registration.registration',compact('countries'));
    }

    public function store(RegistrationEntryFormRequest $request)
    {

        $request->validate();

        $fname = Input::get('first_name');
        $mname = Input::get('middle_name');
        $lname = Input::get('last_name');
        $organization = Input::get('organization');
        $email = Input::get('email');
        $country = Input::get('country');
        $ph_no = Input::get('ph_no');
        $reg_cat = Input::get('registration_category');
        $payment_type = Input::get('payment_type');



        $registrationObj = new ConferenceRegistration();
        $registrationObj->first_name = $fname;
        $registrationObj->middle_name = $mname;
        $registrationObj->last_name = $lname;
        $registrationObj->organization = $organization;
        $registrationObj->email = $email;
        $registrationObj->country = $country;
        $registrationObj->ph_no = $ph_no;
        $registrationObj->registration_category = $reg_cat;
        $registrationObj->payment_type = $payment_type;


            $result = $this->repo->create($registrationObj);


            if ($result['aceplusStatusCode'] == ReturnMessage::OK) {

                //start sending email to user
                $userEmailArr = array();
                $userEmailArr[0] = $email;

                if(isset($userEmailArr) && count($userEmailArr)>0){
                    $template = "backend/registrationsubmituseremail/registrationsubmituseremail";
                    $email = $userEmailArr;
                    $subject = "Hello World";

                    Utility::sendEmail($template,$email,$subject);
                }
                //end sending email to user

                //start sending email to admin
                $adminEmailRaw = DB::select("SELECT * FROM event_emails WHERE deleted_at IS NULL AND type = 1");
                $adminEmailArr = array();
                foreach($adminEmailRaw as $eRaw){
                    array_push($adminEmailArr,$eRaw->email);
                }

                $superadminEmailRaw = DB::select("SELECT * FROM event_emails WHERE deleted_at IS NULL AND type = 5");
                foreach($superadminEmailRaw as $superRaw){
                    array_push($adminEmailArr,$superRaw->email);
                }
                if(isset($adminEmailArr) && count($adminEmailArr)>0){
                    $template = "backend/registrationsubmitadminemail/registrationsubmitadminemail";
                    $email = $adminEmailArr;
                    $subject = "Hello World";

                    Utility::sendEmail($template,$email,$subject);
                }
                //end sending email to admin

                alert()->success('Registration successfully submitted. Please check your email for further information.')->persistent('OK');

                return redirect()->action('Frontend\RegistrationController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Registration successfully created ...'));
            } else {
                return redirect()->action('Frontend\RegistrationController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Registration did not successful ...'));
            }
    }

    public function detail($id){
        if (Auth::guard('User')->check()) {
            $conference_registration = $this->repo->getObjByID($id);
            return view('backend.conference_registration.detail')->with('conference_registration',$conference_registration);
        }
        return redirect('/');
    }

    public function status_change($status,$id){
        if($status == 2){
            ConferenceRegistration::where('id',$id)->update(['status'=>$status]);
            $reg = ConferenceRegistration::find($id);
            $email = $reg->email;

            //start sending email to user
            $template = "backend/registrationconfirmuseremail/registrationconfirmuseremail";
            $subject = "Registration Confirm";
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
                $template = "backend/registrationconfirmadminemail/registrationconfirmadminemail";
                $email = $adminEmailArr;
                $subject = "Registration Confirm";

                Utility::sendEmail($template, $email, $subject);
            }
            //end sending email to admin
            alert()->success('Confirmation email has been sent to user.')->persistent('OK');
            return redirect()->action('Frontend\RegistrationController@all_conference_reg')->with('status',$status);
        }elseif($status == 3){
            ConferenceRegistration::where('id',$id)->update(['status'=>$status]);
            $reg = ConferenceRegistration::find($id);
            $email = $reg->email;

            //start sending email to user
            $template = "backend/registrationcanceluseremail/registrationcanceluseremail";
            $subject = "Registration Cancel";
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
                $template = "backend/registrationcanceladminemail/registrationcanceladminemail";
                $email = $adminEmailArr;
                $subject = "Registration Cancel";

                Utility::sendEmail($template, $email, $subject);
            }
            //end sending email to admin
            alert()->success('Cancellation email has been sent to user.')->persistent('OK');
            return redirect()->action('Frontend\RegistrationController@all_conference_reg')->with('status',$status);
        }
    }
    public function destroy(){
        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        foreach($new_string as $id){
            $this->repo->delete($id);
        }

        return redirect()->action('Backend\AccommodationController@index')
            ->withMessage(FormatGenerator::message('Success', 'Accommodation deleted ...'));

    }

    public function registration_letter(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.registration.registration_letter')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function registration_fee(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.registration.registration_fee')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function registration_cancellation(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.registration.registration_cancellation')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function registration_visa(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.registration.registration_visa')
            ->with('page',$page)
            ->with('posts',$posts);
    }
}
