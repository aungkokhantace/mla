<?php
/**
 * Created by PhpStorm.
 * Author : Aung Ko Khant
 * Date: Feb/01/2017
 * Time: 11:32 AM
 */

use Illuminate\Database\Seeder;
class Default_PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    DB::table('pages')->delete();

    $objs = array(
        ['id'=>1, 'name'=>'HOME','description'=>'', 'content' =>'Home content', 'status' =>'active', 'url' =>'/', 'title' =>'Home', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>2, 'name'=>'PROGRAM','description'=>'', 'content' =>'Membership content', 'status' =>'active', 'url' =>'/program
', 'title' =>'program', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>3, 'name'=>'REGISTRATION','description'=>'', 'content' =>'Publications content', 'status' =>'active', 'url' =>'/registration', 'title' =>'registration', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>4, 'name'=>'EXHIBITION & SPONSORSHIP','description'=>'', 'content' =>'Meetings content', 'status' =>'active', 'url' =>'/exibition', 'title' =>'Exhibition', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>5, 'name'=>'TRAVEL & ACCOMMODATION','description'=>'', 'content' =>'Education content', 'status' =>'active', 'url' =>'/travel', 'title' =>'Travel', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>6, 'name'=>'GALLERY','description'=>'', 'content' =>'Activities content', 'status' =>'active', 'url' =>'main_activities', 'title' =>'Activities title', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>7, 'name'=>'CONTACT US','description'=>'', 'content' =>'Advocacy content', 'status' =>'active', 'url' =>'main_advocacy', 'title' =>'Advocacy title', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        
    );

    DB::table('pages')->insert($objs);
}
}