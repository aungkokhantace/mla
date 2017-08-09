<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->delete();

        $tests = array(
            ['id'=>1, 'name'=>'TEST 1', 'description'=>'This is test one','status'=>'Easy','date'=>'2017-02-23'],
            ['id'=>2, 'name'=>'TEST 2', 'description'=>'This is test two','status'=>'Medium','date'=>'2017-02-24'],
            ['id'=>3, 'name'=>'TEST 3', 'description'=>'This is test three','status'=>'Difficult','date'=>'2017-02-24']
        );

        DB::table('tests')->insert($tests);
    }
}
