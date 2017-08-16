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
        ['id'=>1, 'name'=>'HOME','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'home', 'title' =>'Home', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>2, 'name'=>'PROGRAM','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program
', 'title' =>'program', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>3, 'name'=>'REGISTRATION','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration', 'title' =>'registration', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>4, 'name'=>'EXHIBITION & SPONSORSHIP','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition', 'title' =>'Exhibition', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>5, 'name'=>'TRAVEL & ACCOMMODATION','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'travel', 'title' =>'Travel', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>6, 'name'=>'GALLERY','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'gallery', 'title' =>'Gallery', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>7, 'name'=>'CONTACT US','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'contact', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['id'=>8, 'name'=>'PROGREAM PRE-CONFERENCE','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_pre_conference', 'title' =>'Program Pre-Conference', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>9, 'name'=>'PROGRAM CONFERENCE','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_conference', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>10, 'name'=>'PROGRAM CALL','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_call', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>11, 'name'=>'PROGRAM POSTER','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_poster', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>12, 'name'=>'PROGRAM GUIDELINE','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_guideline', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>13, 'name'=>'PROGRAM LIBRARY','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_library', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['id'=>14, 'name'=>'REGISTRATION FEE','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration_fee', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>15, 'name'=>'REGISTRATION CANCELLATION','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration_cancellation', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>16, 'name'=>'REGISTRATION LETTER','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration_letter', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>17, 'name'=>'REGISTRATION VISA','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration_visa', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['id'=>18, 'name'=>'EXHIBITION SPONSORSHIP','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_sponsorship', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>19, 'name'=>'EXHIBITION EXHIBITOR','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_exhibitor', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>20, 'name'=>'EXHIBITION BOOTH','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_booth', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>21, 'name'=>'EXHIBITION FLOOR PLAN','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_floor_plan', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>22, 'name'=>'EXHIBITION AGREEMENT','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_agrement', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>23, 'name'=>'TRAVEL ACOMMODATION','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'travel_accommodation', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        
    );

    DB::table('pages')->insert($objs);
}
}