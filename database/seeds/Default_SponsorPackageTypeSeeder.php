<?php
/**
 * Created by PhpStorm.
 * Author: Aung Ko Khant
 * Date: 2017-09-25
 * Time: 10:15 AM
 */
use Illuminate\Database\Seeder;
class Default_SponsorPackageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsor_package_type')->delete();

        $array = array(
            ['id'=>1, 'name'=>'Platinum Package', 'currency'=>'usd', 'amount'=>12500, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-09-15 14:45:33', 'updated_at' =>'2017-09-15 14:45:33'],
            ['id'=>2, 'name'=>'Gold Package', 'currency'=>'usd', 'amount'=>10000, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-09-15 14:45:33', 'updated_at' =>'2017-09-15 14:45:33'],
            ['id'=>3, 'name'=>'Silver Package', 'currency'=>'usd', 'amount'=>5000, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-09-15 14:45:33', 'updated_at' =>'2017-09-15 14:45:33'],
            ['id'=>4, 'name'=>'Bronze Package', 'currency'=>'usd', 'amount'=>3000, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-09-15 14:45:33', 'updated_at' =>'2017-09-15 14:45:33'],
            ['id'=>5, 'name'=>'Local Business Package', 'currency'=>'usd', 'amount'=>500, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-09-15 14:45:33', 'updated_at' =>'2017-09-15 14:45:33'],
        
            
        );

        DB::table('sponsor_package_type')->insert($array);
    }
}