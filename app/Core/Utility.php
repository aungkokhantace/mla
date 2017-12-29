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

    //returns latest news count if it is set up in core_configs, and returns 5 as default if not set up
    public static function getLatestNewsCount(){
        $latestNewsCountRaw   = DB::table('core_configs')->where('code','=','SETTING_LATEST_NEWS_COUNT')->first();

        if(isset($latestNewsCountRaw) && count($latestNewsCountRaw) > 0 && $latestNewsCountRaw->value > 0){
            $latestNewsCount      = $latestNewsCountRaw->value;
        }
        else{
            // return 5 as the default count
            $latestNewsCount = 5;
        }
        return $latestNewsCount;
    }

    //returns prefix of registration number if it is set up in core_configs, and returns "REG_000" if not set up
    public static function getRegistrationNumberPrefix(){
        $regPrefixRaw   = DB::table('core_configs')->where('code','=','SETTING_REGISTRATION_NUMBER')->first();
        if(isset($regPrefixRaw) && count($regPrefixRaw) > 0){
            $registrationPrefix      = $regPrefixRaw->value;
        }
        else{
            // return 'REG_000' as default value
            $registrationPrefix = 'REG_000';
        }
        return $registrationPrefix;
    }

     //returns prefix of exhibitor registration number if it is set up in core_configs, and returns "EXH_REG_000" if not set up
     public static function getExhibitorRegistrationNumberPrefix(){
        $exhRegPrefixRaw   = DB::table('core_configs')->where('code','=','SETTING_EXHIBITOR_REGISTRATION_NUMBER')->first();
        if(isset($exhRegPrefixRaw) && count($exhRegPrefixRaw) > 0){
            $exhRegistrationPrefix      = $exhRegPrefixRaw->value;
        }
        else{
            // return 'EXH_REG_000' as default value
            $exhRegistrationPrefix = 'EXH_REG_000';
        }
        return $exhRegistrationPrefix;
    }

    //sends email with parameters in mail blade
    public static function sendEmailWithParameters($template,$params,$emails,$subject){
        Mail::send($template, $params, function($message) use($emails,$subject)
        {
            $message->to($emails)
                ->subject($subject);
        });
    }

    //returns earlybird registration deadline if it is set up in core_configs, and returns "2018-01-31" as default if not set up
    public static function getEarlyBirdRegistrationDeadline(){
        $temp = DB::select("SELECT value FROM core_configs WHERE code = 'SETTING_EARLY_BIRD_REG' AND type = 'SETTING' LIMIT 1");
        if(isset($temp) && count($temp)>0){
            $early_bird_deadline = $temp[0]->value;
        }
        else{
            $early_bird_deadline = '2018-01-31'; //default date
        }
        return $early_bird_deadline;
    }

    //returns standard registration deadline if it is set up in core_configs, and returns "2018-04-29" as default if not set up
    public static function getStandardRegistrationDeadline(){
        $temp = DB::select("SELECT value FROM core_configs WHERE code = 'SETTING_STANDARD_REG' AND type = 'SETTING' LIMIT 1");
        if(isset($temp) && count($temp)>0){
            $standard_deadline = $temp[0]->value;
        }
        else{
            $standard_deadline = '2018-04-29'; //default date
        }
        return $standard_deadline;
    }

}
