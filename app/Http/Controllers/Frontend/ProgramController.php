<?php
/**
 * Created by PhpStorm.
 * User: william
 * Author: Wai Yan Aung
 * Date: 1/14/2017
 * Time: 10:55 AM
 */

namespace App\Http\Controllers\Frontend;

use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use App\Frontend\Infrastructure\Forms\ProgramCallEntryFormRequest;
use App\Frontend\Infrastructure\Forms\ProgramPosterEntryFormRequest;
use App\Frontend\Program\ProgramCall;
use App\Frontend\Program\ProgramCallRepositoryInterface;
use App\Frontend\Program\ProgramPoster;
use App\Frontend\Program\ProgramPosterRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;

use App\Backend\Page\PageRepository;
use App\Backend\Post\PostRepository;
use Illuminate\Support\Facades\Route;

class ProgramController extends Controller
{
    private $programPosterRepository;
    private $programCallRepository;

    public function __construct(ProgramPosterRepositoryInterface $programPosterRepository,ProgramCallRepositoryInterface $programCallRepository)
    {
        $this->programPosterRepository = $programPosterRepository;
        $this->programCallRepository = $programCallRepository;
    }


    public function index(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.program.program')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function program_call(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.program.program_call')
            ->with('page',$page)
            ->with('posts',$posts);
    }
    public function program_call_store(ProgramCallEntryFormRequest $req)
    {
        $req->validate();

        $first_author = Input::get('first_author');
        $email = Input::get('email');
        $address = Input::get('address');
        $second_author = Input::get('second_author');
        $third_author = Input::get('third_author');
        $abstract = Input::get('abstract');

        $programCallObj = new ProgramCall();
        $programCallObj->first_author = $first_author;
        $programCallObj->email = $email;
        $programCallObj->address = $address;
        $programCallObj->second_author = $second_author;
        $programCallObj->third_author = $third_author;
        $programCallObj->abstract = $abstract;



        $result = $this->programCallRepository->create($programCallObj);


        if ($result['aceplusStatusCode'] == ReturnMessage::OK) {
            return redirect()->action('Frontend\ProgramController@program_call')
                ->withMessage(FormatGenerator::message('Success', 'Call for paper successfully created ...'));
        } else {
            return redirect()->action('Frontend\ProgramController@program_call')
                ->withMessage(FormatGenerator::message('Fail', 'Call for paper did not created ...'));
        }
    }

    public function program_conference(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.program.program_conference')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function program_guideline(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.program.program_guideline')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function program_library(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.program.program_library')
            ->with('page',$page)
            ->with('posts',$posts);
    }

    public function program_poster(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.program.program_poster')
            ->with('page',$page)
            ->with('posts',$posts);
    }
    public function program_poster_store(ProgramPosterEntryFormRequest $request)
    {
        $request->validate();

        $address = Input::get('address');
        $email = Input::get('email');
        $description = Input::get('description');
        $title = Input::get('title');
        $author = Input::get('author');

        $programPosterObj = new ProgramPoster();
        $programPosterObj->address = $address;
        $programPosterObj->email = $email;
        $programPosterObj->description = $description;
        $programPosterObj->title = $title;
        $programPosterObj->author = $author;



        $result = $this->programPosterRepository->create($programPosterObj);


        if ($result['aceplusStatusCode'] == ReturnMessage::OK) {
            return redirect()->action('Frontend\ProgramController@program_poster')
                ->withMessage(FormatGenerator::message('Success', 'Poster session successfully created ...'));
        } else {
            return redirect()->action('Frontend\ProgramController@program_poster')
                ->withMessage(FormatGenerator::message('Fail', 'Poster session did not created ...'));
        }
    }

    public function program_pre_conference(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        return view('frontend.program.program_pre_conference')
            ->with('page',$page)
            ->with('posts',$posts);
    }

}
