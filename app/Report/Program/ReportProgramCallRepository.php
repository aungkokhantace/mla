<?php
/**
 * Created by PhpStorm.
 * Author: Mi Tin Zar Kyaw
 * Date: 1/14/2017
 * Time: 3:56 PM
 */

namespace App\Report\Program;

use App\Backend\Country\Country;
use App\Core\ReturnMessage;
use App\Frontend\Program\ProgramCall;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Core\Utility;

class ReportProgramCallRepository implements ReportProgramCallRepositoryInterface
{
    public function getProgramCall()
    {
        $program_calls = ProgramCall::whereNull('deleted_at')->get();
        return $program_calls;
    }

    public function getDataByDate($type=null,$from_date=null, $to_date=null)
    {
        $query = ProgramCall::query();
        $query = $query->select('program_paper.id',
            'program_paper.title as title',
            'program_paper.first_author as first_author',
            'program_paper.email as email',
            'program_paper.address as address',
            'program_paper.second_author as second_author',
            'program_paper.third_author as third_author',
            'program_paper.abstract as abstract',
            'program_paper.paper_file as paper_file',
            'program_paper.status as status');
        if(isset($type) && $type!=null  && $type <> 'all'){
            $query =$query->where('program_paper.status',$type);
        }

        if(isset($from_date) && $from_date != null){
            $tempFromDate = date("Y-m-d", strtotime($from_date));
            $query = $query->where('program_paper.created_at', '>=' , $tempFromDate);
        }
        if(isset($to_date) && $to_date != null){
            $tempToDate = date("Y-m-d", strtotime($to_date));
            $query = $query->where('program_paper.created_at', '<=', $tempToDate);
        }
        $query = $query->whereNull('program_paper.deleted_at');
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
        $program_call = ProgramCall::find($id);
        return $program_call;
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
