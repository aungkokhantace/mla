<?php
/**
 * Created by PhpStorm.
 * Author: Soe Thandar Aung
 * Date: 2/15/2017
 * Time: 11:28 AM
 */

namespace App\Backend\Township;


interface TownshipRepositoryInterface
{
    public function getObjs();
    public function create($paramObj);
    public function update($paramObj);
    public function getObjByID($id);
    public function delete($id);
    public function getArrays();
}