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
use App\Backend\LatestNew\LatestNewRepository;
use App\Core\Utility;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
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
        
        $latestNewRepo  = new LatestNewRepository();
        // $latestNews      = $latestNewRepo->getLatestNew();

        $latestNewsCount = Utility::getLatestNewsCount();
        
        $latestNews      = $latestNewRepo->getLatestNewByLimit($latestNewsCount);  //get latest news by count in config or 5 as default

        //date to be counted to in timer
        $countDownDate = Utility::getCountDownDate();        
        
        foreach($latestNews as $news){
            $description = $news->description;
            $short_description = substr($description,0,60);
            $news->short_description = $short_description;
        }

        return view('frontend.home')
            ->with('page',$page)
            ->with('posts',$posts)
            ->with('latestNews',$latestNews)
            ->with('countDownDate',$countDownDate);
    }

    public function autocomplete(){
        $postRepo = new PostRepository();
        $results = $postRepo->getPostsForAutocomplete();
        return \Response::json($results);
    }

    public function search(){
        $search_term = Input::get('search_term');
        $postRepo = new PostRepository();
        $results = $postRepo->getPostsByTerm($search_term);
       
        return view('frontend.search.search_result')
                ->with('results',$results);
    }

}
