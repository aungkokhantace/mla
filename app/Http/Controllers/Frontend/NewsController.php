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
use App\Backend\LatestNew\LatestNew;
use App\Backend\LatestNew\LatestNewRepository;
use App\Backend\LatestNew\LatestNewRepositoryInterface;
use App\Core\Utility;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class NewsController extends Controller
{

    public function __construct(LatestNewRepositoryInterface $repo)
    {
        $this->repo = $repo;
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
        $latestNews      = $latestNewRepo->getLatestNew();
       
        //date to be counted to in timer
        $countDownDate = Utility::getCountDownDate();        

        foreach($latestNews as $news){
            $description = $news->description;
            $short_description = substr($description,0,50);
            $news->short_description = $short_description;
        }

        return view('frontend.home')
            ->with('page',$page)
            ->with('posts',$posts)
            ->with('latestNews',$latestNews)
            ->with('countDownDate',$countDownDate);
    }

    public function detail($id){
        $latestNews = LatestNew::find($id);
        //like "Friday, 18-August-2017"
        $formatted_date = date("l, d-F-Y", strtotime($latestNews->news_date));
        $latestNews->formatted_date = $formatted_date;
        return view('frontend.latest_news.latest_news_detail')
                    ->with('latestNews',$latestNews);
    }

    public function allNews(Request $request){
        $latestNews = $this->repo->getLatestNew();
        $news_array = array();
        foreach($latestNews as $news){
            //for short description
            $description = $news->description;
            $short_description = substr($description,0,200).'...';
            $news->short_description = $short_description;
            
            //like "Friday, 18-August-2017"
            $formatted_date = date("l, d-F-Y", strtotime($news->news_date));
            $news->formatted_date = $formatted_date;
            
            array_push($news_array,$news);
        }

        //start paginating array
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $col = new Collection($news_array);
        $perPage = 5; //items per page
        $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $NewsEntries = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage);
        
        $NewsEntries->setPath($request->url());
        $NewsEntries->appends($request->except(['page']));
        //end paginating array

        return view('frontend.latest_news.latest_news_all')
                    ->with('latestNews',$NewsEntries);
    }
}
