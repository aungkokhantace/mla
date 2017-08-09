<?php
namespace App\Sample\Test;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2/23/2017
 * Time: 3:28 PM
 */
interface TestRepositoryInterface
{
    public function getAllTest();
    public function countTestByStatus();
    public function countTestByDate();
    public function insertTests($data);
}