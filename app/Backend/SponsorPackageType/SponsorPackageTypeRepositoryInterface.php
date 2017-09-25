<?php

/**
 * Created by PhpStorm.
 * Author: Aung Ko Khant
 * Date: 2017-09-25
 * Time: 10:36 AM
 */
namespace App\Backend\SponsorPackageType;

interface SponsorPackageTypeRepositoryInterface
{
    public function getObjs();
    public function getArrays();    
    public function getObjByID($id);
}