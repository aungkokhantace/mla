<?php
/**
 * Created by PhpStorm.
 * Author: Mi Tin Zar Kyaw
 * Date: 1/14/2017
 * Time: 3:56 PM
 */

namespace App\Report\ConferenceRegistration;

use App\Backend\Country\Country;
use App\Core\ReturnMessage;
use App\Frontend\ConferenceRegistration\ConferenceRegistration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Core\Utility;

class ReportConferenceRegistrationRepository implements ReportConferenceRegistrationRepositoryInterface
{
    public function getConferenceRegistration()
    {
        $conferenceRegistrations = DB::select("SELECT * FROM conference_registrations");
        return $conferenceRegistrations;
    }

    public function getDataByDate($type=null,$from_date=null, $to_date=null)
    {
        $query = ConferenceRegistration::query();
        $query = $query->leftjoin('countries', 'countries.id', '=', 'conference_registrations.country');
        $query = $query->select('conference_registrations.id',
            'conference_registrations.first_name as first_name',
            'conference_registrations.middle_name as middle_name',
            'conference_registrations.last_name as last_name',
            'conference_registrations.organization as organization',
            'conference_registrations.email as email',
            'conference_registrations.payment_type as payment_type',
            'countries.name as country',
            'conference_registrations.status as status');
        if(isset($type) && $type!=null  && $type <> 'all'){
            $query =$query->where('conference_registrations.status',$type);
        }

        if(isset($from_date) && $from_date != null){
            $tempFromDate = date("Y-m-d", strtotime($from_date));
            $query = $query->where('conference_registrations.created_at', '>=' , $tempFromDate);
        }
        if(isset($to_date) && $to_date != null){
            $tempToDate = date("Y-m-d", strtotime($to_date));
            $query = $query->where('conference_registrations.created_at', '<=', $tempToDate);
        }
        $query = $query->whereNull('conference_registrations.deleted_at');
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
        $conference_registration = ConferenceRegistration::find($id);
        return $conference_registration;
    }

   public function delete($id){
       try{
           $tempObj = ConferenceRegistration::find($id);
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