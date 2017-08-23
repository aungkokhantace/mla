<?php
/**
 * Created by PhpStorm.
 * Author: Soe Thandar Aung
 * Date: 11/2/2016
 * Time: 2:18 PM
 */
use Illuminate\Database\Seeder;

class Default_CoreSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('core_settings')->delete();

        $settings = array(
            ['code'=>'SETTING_PLATINUM_PACKAGE', 'type'=>'SETTING', 'value'=>'1','description'=>'Platinum Package'],
            ['code'=>'SETTING_GOLD_PACKAGE', 'type'=>'SETTING', 'value'=>'2','description'=>'Gold Package'],
            ['code'=>'SETTING_SILVER_PACKAGE', 'type'=>'SETTING', 'value'=>'3','description'=>'Silver Package'],
            ['code'=>'SETTING_BRONZE_PACKAGE', 'type'=>'SETTING', 'value'=>'4','description'=>'Bronze Package'],
        );

        DB::table('core_settings')->insert($settings);
    }
}