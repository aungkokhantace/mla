<?php
/**
 * Created by PhpStorm.
 * Author: Aung Ko Khant
 * Date: 2017-09-25
 * Time: 10:36 AM
 */

namespace App\Backend\SponsorPackageType;

use App\Core\ReturnMessage;
use App\Core\Utility;
use App\Log\LogCustom;
use DB;

class SponsorPackageTypeRepository implements SponsorPackageTypeRepositoryInterface
{
    public function getObjs()
    {
        $objs = SponsorPackageType::whereNull('deleted_at')->get();
        return $objs;
    }

    public function getArrays()
    {
        $tbName = (new SponsorPackageType())->getTable();
        $arr = DB::select("SELECT * FROM $tbName WHERE deleted_at IS NULL");
        return $arr;
    }

    public function getObjByID($id){
        $role = SponsorPackageType::find($id);
        return $role;
    }
}