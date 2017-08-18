<?php

namespace App\Http\Controllers\Frontend;

use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use App\Frontend\Exhibition\ExhibitionExhibitor;
use App\Frontend\Exhibition\ExhibitorRepositoryInterface;
use App\Frontend\Infrastructure\Forms\ExhibitorEntryFormRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\Backend\Page\PageRepository;
use App\Backend\Post\PostRepository;
use Illuminate\Support\Facades\Route;

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

        return view('frontend.exhibition.exhibition')
            ->with('page',$page)
            ->with('posts',$posts);
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
                return view('backend.exhibitor_registration.index')->with('exhibitors', $exhibitors);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/post');
        }
    }

    public function exhibitor_status_change($status,$id){
        if($status == 2){
            ExhibitionExhibitor::where('id',$id)->update(['status'=>$status]);
            return redirect()->action('Frontend\ExhibitionController@all_exhibitor')->with('status',$status);
        }elseif($status == 3){
            ExhibitionExhibitor::where('id',$id)->update(['status'=>$status]);
            return redirect()->action('Frontend\ExhibitionController@all_exhibitor')->with('status',$status);
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
        return view('frontend.exhibition.exhibition_exhibitor');
    }

    public function exhibition_exhibitor_store(ExhibitorEntryFormRequest $request){
        $request->validate();

        $name = Input::get('name');
        $address = Input::get('address');
        $ph_no = Input::get('ph_no');
        $email = Input::get('email');
        $business_type = Input::get('business_type');


        $exhibitorObj = new ExhibitionExhibitor();
        $exhibitorObj->name = $name;
        $exhibitorObj->address = $address;
        $exhibitorObj->ph_no = $ph_no;
        $exhibitorObj->email = $email;
        $exhibitorObj->business_type = $business_type;


        $result = $this->exhibitorRepository->create($exhibitorObj);


        if ($result['aceplusStatusCode'] == ReturnMessage::OK) {
            return redirect()->action('Frontend\ExhibitionController@exhibition_exhibitor')
                ->withMessage(FormatGenerator::message('Success', 'Exhibitor or Sponsor successfully created ...'));
        } else {
            return redirect()->action('Frontend\ExhibitionController@exhibition_exhibitor')
                ->withMessage(FormatGenerator::message('Fail', 'Exhibitor or Sponsor did not create ...'));
        }
    }

}
