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
        ['id'=>2, 'name'=>'PROGRAM','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program', 'title' =>'program', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>3, 'name'=>'REGISTRATION','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration', 'title' =>'registration', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>4, 'name'=>'EXHIBITION & SPONSORSHIP','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition', 'title' =>'Exhibition', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>5, 'name'=>'TRAVEL & ACCOMMODATION','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'travel', 'title' =>'Travel', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>6, 'name'=>'GALLERY','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'gallery', 'title' =>'Gallery', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>7, 'name'=>'CONTACT US','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'contact', 'title' =>'Contact Us', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['id'=>8, 'name'=>'PROGREAM PRE-CONFERENCE','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_pre_conference', 'title' =>'Program Pre-Conference', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>9, 'name'=>'PROGRAM CONFERENCE','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_conference', 'title' =>'Program Conference', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>10, 'name'=>'PROGRAM CALL','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_call', 'title' =>'Program Call', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>11, 'name'=>'PROGRAM POSTER','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_poster', 'title' =>'Program Poster', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>12, 'name'=>'PROGRAM GUIDELINE','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_guideline', 'title' =>'Program Guideline', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>13, 'name'=>'PROGRAM LIBRARY','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'program_library', 'title' =>'Program Library', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['id'=>14, 'name'=>'REGISTRATION FEE','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration_fee', 'title' =>'Registration Fee', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>15, 'name'=>'REGISTRATION CANCELLATION','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration_cancellation', 'title' =>'Registration Cancellation', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>16, 'name'=>'REGISTRATION LETTER','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration_letter', 'title' =>'Registration Letter', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>17, 'name'=>'REGISTRATION VISA','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'registration_visa', 'title' =>'Registration VISA', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['id'=>18, 'name'=>'EXHIBITION SPONSORSHIP','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_sponsorship', 'title' =>'Exhibition Sponsorship', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>19, 'name'=>'EXHIBITION EXHIBITOR','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_exhibitor', 'title' =>'Exhibition Exhibitor', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>20, 'name'=>'EXHIBITION BOOTH','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_booth', 'title' =>'Exhibition Booth', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>21, 'name'=>'EXHIBITION FLOOR PLAN','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_floor_plan', 'title' =>'Exhibition Floor Plan', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>22, 'name'=>'EXHIBITION AGREEMENT','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'exhibition_agreement', 'title' =>'Exhibition Agreement', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>23, 'name'=>'TRAVEL ACOMMODATION','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'travel_accommodation', 'title' =>'Travel Accommodation', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>0, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>24, 'name'=>'SCHOOL LIBRARY WORKSHOP','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'regional_school_library_workshop', 'title' =>'School Library Workshop', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>1, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>25, 'name'=>'EXECUTIVE BOARD MEETING','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'executive_board_meeting', 'title' =>'Executive Board Meeting  ', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>1, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['id'=>26, 'name'=>'CONFERENCE OF DIRECTORS','description'=>'', 'content' =>'', 'status' =>'active', 'url' =>'conference_of_directors', 'title' =>'Conference of Directors', 'page_menu_order' =>'1', 'events_id' =>'1', 'templates_id' =>'1', 'allow_edit' =>1, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        
    );

    DB::table('pages')->insert($objs);
}
}