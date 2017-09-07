<?php
/**
 * Created by PhpStorm.
 * Author: Mi Tin Zar Kyaw
 * Date: 1/14/2017
 * Time: 3:56 PM
 */

namespace App\Report\Exhibitor;

use App\Backend\Country\Country;
use App\Core\ReturnMessage;
use App\Frontend\Exhibition\ExhibitionExhibitor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Core\Utility;

class ReportExhibitorRepository implements ReportExhibitorRepositoryInterface
{
    public function getExhibitor()
    {
        $exhibitors = ExhibitionExhibitor::whereNull('deleted_at')->get();
        return $exhibitors;
    }

    public function getDataByDate($type=null,$from_date=null, $to_date=null)
    {
        $query = ExhibitionExhibitor::query();
        $query = $query->select('exhibition_exhibitors.id',
            'exhibition_exhibitors.name as name',
            'exhibition_exhibitors.address as address',
            'exhibition_exhibitors.ph_no as ph_no',
            'exhibition_exhibitors.email as email',
            'exhibition_exhibitors.business_type as business_type',
            'exhibition_exhibitors.status as status');
        if(isset($type) && $type!=null  && $type <> 'all'){
            $query =$query->where('exhibition_exhibitors.status',$type);
        }

        if(isset($from_date) && $from_date != null){
            $tempFromDate = date("Y-m-d", strtotime($from_date));
            $query = $query->where('exhibition_exhibitors.created_at', '>=' , $tempFromDate);
        }
        if(isset($to_date) && $to_date != null){
            $tempToDate = date("Y-m-d", strtotime($to_date));
            $query = $query->where('exhibition_exhibitors.created_at', '<=', $tempToDate);
        }
        $query = $query->whereNull('exhibition_exhibitors.deleted_at');
        $result = $query->get();
        return $result;
    }

    public function create($paramObj)
    {
        $returnedObj = array();
        $returnedObj['aceplusStatusCode'] = ReturnMessage::INTERNAL_SERVER_ERROR;

        try {
            //$tempObj = Utility::addCreatedBy($paramObj);
            $paramObj->save();

            $returnedObj['aceplusStatusCode'] = ReturnMessage::OK;
            return $returnedObj;
        }
        catch(\Exception $e){
            $returnedObj['aceplusStatusMessage'] = $e->getMessage();
            return $returnedObj;
        }
    }

    public function update($paramObj)
    {
        $returnedObj = array();
        $returnedObj['aceplusStatusCode'] = ReturnMessage::INTERNAL_SERVER_ERROR;

        try {
            $tempObj = Utility::addUpdatedBy($paramObj);
            $tempObj->save();

            $returnedObj['aceplusStatusCode'] = ReturnMessage::OK;
            return $returnedObj;
        }
        catch(\Exception $e){

            $returnedObj['aceplusStatusMessage'] = $e->getMessage();
            return $returnedObj;
        }
    }

    public function getObjByID($id){
        $exhibitor = ExhibitionExhibitor::find($id);
        return $exhibitor;
    }

   public function delete($id){
       try{
           $tempObj = Accommodation::find($id);
           $tempObj = Utility::addDeletedBy($tempObj);
           $tempObj->deleted_at = date('Y-m-d H:m:i');
           $tempObj->save();
       }
       catch(\Exception $e){
       }
    }

    public function getPageIDByURL($url){
        if($url == "/"){
            $url = "home";
        }

        $page_id = DB::table('pages')->where('url',$url)->whereNull('deleted_at')->first()->id;
        return $page_id;
    }

    public function getURLByPageID($page_id){
        $url = DB::table('pages')->where('id',$page_id)->whereNull('deleted_at')->first()->url;
        return $url;
    }
    
    public function getCountry(){
        $countries = DB::table('countries')->get();
        return $countries;
    }

}