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

class LatestNewsController extends Controller
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
        return view('frontend.latest_news.latest_news_detail')
                    ->with('latestNews',$latestNews);
    }

    public function allLatestNews(){
        $latestNews = $this->repo->getLatestNew();
        foreach($latestNews as $news){
            $description = $news->description;
            $short_description = substr($description,0,50);
            $news->short_description = $short_description;
        }
        
        return view('frontend.latest_news.latest_news_all')
                    ->with('latestNews',$latestNews);
    }
}
