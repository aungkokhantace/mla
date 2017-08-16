<?php
/**
 * Created by PhpStorm.
 * Author: Mi Tin Zar Kyaw
 * Date: 1/14/2017
 * Time: 3:56 PM
 */

namespace App\Frontend\ConferenceRegistration;

use App\Backend\Country\Country;
use App\Core\ReturnMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Core\Utility;

class ConferenceRegistrationRepository implements ConferenceRegistrationRepositoryInterface
{
    public function getConferenceRegistration()
    {
        $accommodations = ConferenceRegistration::whereNull('deleted_at')->get();
        return $accommodations;
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
        $latest_new = Accommodation::find($id);
        return $latest_new;
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