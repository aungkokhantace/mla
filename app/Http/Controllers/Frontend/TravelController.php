<?php
/**
 * Created by PhpStorm.
 * User: william
 * Author: Wai Yan Aung
 * Date: 1/14/2017
 * Time: 10:55 AM
 */

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Redirect;

use App\Backend\Page\PageRepository;
use App\Backend\Post\PostRepository;
use Illuminate\Support\Facades\Route;
use App\Backend\Accommodation\AccommodationRepository;
use App\Backend\PostConferenceTravel\PostConferenceTravelRepository;

class TravelController extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        $postConRepo    = new PostConferenceTravelRepository();
        $postCons       = $postConRepo->getPostConferenceTravel();

        return view('frontend.travel.travel')
            ->with('page',$page)
            ->with('posts',$posts)
            ->with('postConferenceTravels', $postCons);
    }

    public function travel_accommodation(Request $request)
    {
        $url = Route::getCurrentRoute()->getPath();
        $pageRepo = new PageRepository();
        $page_id  = $pageRepo->getPageIDByURL($url);

        $page = $pageRepo->getObjByID($page_id);

        $postRepo = new PostRepository();
        $posts    = $postRepo->getObjByPage($page_id);

        $accommoRepo    = new AccommodationRepository();
        $accommos       = $accommoRepo->getAccommodation();
        
        return view('frontend.travel.travel_accommodation')
            ->with('page',$page)
            ->with('posts',$posts)
            ->with('accommos',$accommos);
    }

}
