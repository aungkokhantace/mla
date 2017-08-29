<?php namespace App\Core;
/**
 * Created by PhpStorm.
 * Author: Wai Yan Aung
 * Date: 7/12/2016
 * Time: 3:27 PM
 */

use App\Core\Config\ConfigRepository;
use Illuminate\Support\Facades\Mail;
use Validator;
use Auth;
use DB;
use App\Http\Requests;
use App\Session;
use App\Core\User\UserRepository;
use App\Core\SyncsTable\SyncsTable;

class Utility
{

    public static function addCreatedBy($newObj)
    {
        $sessionObj = session('user');
        if(isset($sessionObj)){
            $userSession = session('user');
            $loginUserId = $userSession['id'];
            $newObj->updated_by = $loginUserId;
            $newObj->created_by = $loginUserId;
        }
        Utility::updateSyncsTable($newObj);
        return $newObj;
    }

    public static function addUpdatedBy($newObj)
    {
        $sessionObj = session('user');
        if(isset($sessionObj)){
            $userSession = session('user');
            $loginUserId = $userSession['id'];
            $newObj->updated_by = $loginUserId;
        }
        Utility::updateSyncsTable($newObj);
        return $newObj;
    }

    public static function addDeletedBy($newObj)
    {
        $sessionObj = session('user');
        if(isset($sessionObj)){
            $userSession = session('user');
            $loginUserId = $userSession['id'];
            $newObj->deleted_by = $loginUserId;
        }
        Utility::updateSyncsTable($newObj);
        return $newObj;
    }

    public static function updateSyncsTable($newObj)
    {
        $table_name = $newObj->getTable();
        $tempSyncTable = new SyncsTable();
        $syncTableName = $tempSyncTable->getTable();

        $syncTableObj = DB::table($syncTableName)
            ->select('*')
            ->where('table_name' , '=' , $table_name)
            ->first();

        if(isset($syncTableObj) && count($syncTableObj)>0) {
            $id = $syncTableObj->id;
            $version = $syncTableObj->version + 1;
            $syncTable = SyncsTable::find($id);

            $sessionObj = session('user');
            if (isset($sessionObj)) {
                $userSession = session('user');
                $loginUserId = $userSession['id'];
                $syncTable->updated_by = $loginUserId;
            }

            $syncTable->version = $version++;
            $syncTable->save();

        }
    }

    public static function getCurrentUserID(){
        $id = Auth::guard('User')->user()->id;
        return $id;
    }

    public static function sendEmail($template,$emails,$subject){
        Mail::send($template, [], function($message) use($emails,$subject)
        {
            $message->to($emails)
                ->subject($subject);
        });
    }

    //returns count down date if it is set up in core_configs, and returns end of current year if not set up
    public static function getCountDownDate(){
        $countDownDateRaw   = DB::table('core_configs')->where('code','=','SETTING_COUNTDOWN_DATE')->first();
        if(isset($countDownDateRaw) && count($countDownDateRaw) > 0){
            $countDownDate      = $countDownDateRaw->value;
        }
        else{
            // return end of current year
            $countDownDate = date("Y").'-12-31';
        }
        return $countDownDate;        
    }
}