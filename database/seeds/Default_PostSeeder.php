<?php
/**
 * Created by PhpStorm.
 * Author : Aung Ko Khant
 * Date: Feb/01/2017
 * Time: 11:32 AM
 */

use Illuminate\Database\Seeder;
class Default_PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    DB::table('posts')->delete();

    $objs = array(
        ['id'=>1, 'name'=>'Home Page','description'=>'',
            'status' =>'active', 'url' =>'/', 'title' =>'Home', 'post_order' =>2, 'pages_id' =>1, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

       
    );

    DB::table('posts')->insert($objs);
}
}