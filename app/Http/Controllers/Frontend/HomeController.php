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
use App\Frontend\Exhibition\ExhibitorRepository;
use App\Backend\SponsorPackageType\SponsorPackageTypeRepository;
use App\Core\Utility;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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
        
        //for short description to show before read more
        foreach($latestNews as $news){
            $description                = $news->description;
            $short_description          = substr($description,0,60);
            $news->short_description    = $short_description;
        }

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

        return view('frontend.home')
            ->with('page',$page)
            ->with('posts',$posts)
            ->with('latestNews',$latestNews)
            ->with('countDownDate',$countDownDate)
            ->with('exhibitorArray',$exhibitorArray);
    }

    public function autocomplete(){
        $postRepo = new PostRepository();
        $results = $postRepo->getPostsForAutocomplete();
        return \Response::json($results);
    }

    public function search(Request $request){
        $search_term = Input::get('search_term');
        $postRepo = new PostRepository();
        $results = $postRepo->getPostsByTerm($search_term);
        
        foreach($results as $result){
            $content = $result->content;
            $short_content = substr($content,0,250);
            $result->short_content = $short_content;
        }

         //start paginating array
        //  $currentPage = LengthAwarePaginator::resolveCurrentPage();
        //  $col = new Collection($results);
        //  $perPage = 3; //items per page
        //  $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        //  $NewsEntries = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage);
         
        //  $NewsEntries->setPath($request->url());
        //  $NewsEntries->appends($request->except(['page']));
         //end paginating array

        return view('frontend.search.search_result')
                ->with('results',$results);
    }
}
