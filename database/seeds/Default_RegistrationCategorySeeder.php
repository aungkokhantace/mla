<?php
/**
 * Created by PhpStorm.
 * Author: Soe Thandar Aung
 * Date: 11/2/2016
 * Time: 2:17 PM
 */
use Illuminate\Database\Seeder;
class Default_RegistrationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registration_categories')->delete();

        $array = array(
            ['id'=>1, 'name'=>'International Delegate', 'currency_type'=>'usd', 'early_bird_fee'=>250, 'normal_fee'=>300, 'on_site_fee'=>350, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-09-15 14:45:33', 'updated_at' =>'2017-09-15 14:45:33'],
            ['id'=>2, 'name'=>'Local Delegate(MLA Member)**', 'currency_type'=>'mmk', 'early_bird_fee'=>20000, 'normal_fee'=>0, 'on_site_fee'=>30000, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-09-15 14:45:33', 'updated_at' =>'2017-09-15 14:45:33'],
            ['id'=>3, 'name'=>'Local Delegate (Non MLA Member)', 'currency_type'=>'mmk', 'early_bird_fee'=>30000, 'normal_fee'=>0, 'on_site_fee'=>40000, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-09-15 14:45:33', 'updated_at' =>'2017-09-15 14:45:33'],
            ['id'=>4, 'name'=>'	Student(Local)***', 'currency_type'=>'mmk', 'early_bird_fee'=>15000, 'normal_fee'=>0, 'on_site_fee'=>20000, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-09-15 14:45:33', 'updated_at' =>'2017-09-15 14:45:33'],
            
        );

        DB::table('registration_categories')->insert($array);
    }
}