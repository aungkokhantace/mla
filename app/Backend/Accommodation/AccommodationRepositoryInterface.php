<?php
/**
 * Created by PhpStorm.
 * Author: Mi Tin Zar Kyaw
 * Date: 1/14/2017
 * Time: 3:56 PM
 */

namespace App\Backend\Accommodation;


interface AccommodationRepositoryInterface
{
    public function getAccommodation();
    public function create($paramObj);
    public function update($paramObj);
    public function getObjByID($id);
    public function delete($id);  
}