<?php

use Illuminate\Database\Seeder;

class Default_TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('townships')->delete();

        $objs = array(            

['city_id'=>'1', 'name'=>'Bogale', 'code' =>'01', 'id' =>'1', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Danubyu', 'code' =>'02', 'id' =>'2', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Dedaye', 'code' =>'03', 'id' =>'3', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Einme', 'code' =>'DZ', 'id' =>'4', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Hinthada', 'code' =>'04', 'id' =>'5', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Ingapu', 'code' =>'05', 'id' =>'6', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Kangyidaunt', 'code' =>'07', 'id' =>'7', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Kyaiklat', 'code' =>'08', 'id' =>'8', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Kyangin', 'code' =>'09', 'id' =>'9', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Kyaunggon', 'code' =>'10', 'id' =>'10', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Kyonpyaw', 'code' =>'11', 'id' =>'11', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Labutta', 'code' =>'12', 'id' =>'12', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Lemyethna', 'code' =>'13', 'id' =>'13', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Maubin', 'code' =>'14', 'id' =>'14', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['city_id'=>'1', 'name'=>'Mawlamyinegyun', 'code' =>'15', 'id' =>'15', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
           );

        DB::table('townships')->insert($objs);
    }
}
