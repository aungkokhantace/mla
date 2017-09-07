<?php
/**
 * Created by PhpStorm.
 * Author: Mi Tin Zar Kyaw
 * Date: 1/14/2017
 * Time: 3:56 PM
 */

namespace App\Report\Program;


interface ReportProgramCallRepositoryInterface
{
    public function getProgramCall();
    public function getDataByDate($type,$from_date,$to_date);
    public function create($paramObj);
    public function update($paramObj);
    public function getObjByID($id);
    public function delete($id);  
    public function getCountry();
}