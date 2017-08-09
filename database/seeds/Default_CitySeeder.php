<?php

use Illuminate\Database\Seeder;

class Default_CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        $objs = array(            

['country_id'=>'153', 'name'=>'Ayeyarwady Division', 'code' =>'01', 'id' =>'1', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Bago Division', 'code' =>'02', 'id' =>'2', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Chin State', 'code' =>'03', 'id' =>'3', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Kachin State', 'code' =>'DZ', 'id' =>'4', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Kayah State', 'code' =>'04', 'id' =>'5', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Kayin State', 'code' =>'05', 'id' =>'6', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Magway Division', 'code' =>'07', 'id' =>'7', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Mandalay Division', 'code' =>'08', 'id' =>'8', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Mon State', 'code' =>'09', 'id' =>'9', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Rakhine State', 'code' =>'10', 'id' =>'10', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Sagaing Division', 'code' =>'11', 'id' =>'11', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Shan State', 'code' =>'12', 'id' =>'12', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Tanintharyi Division', 'code' =>'13', 'id' =>'13', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Yangon Division', 'code' =>'14', 'id' =>'14', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
['country_id'=>'153', 'name'=>'Naypyidaw', 'code' =>'15', 'id' =>'15', 'status' =>'1', 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-06 11:30:35', 'updated_at' =>'2017-01-06 11:30:35'],
           );

        DB::table('cities')->insert($objs);
    }
}
