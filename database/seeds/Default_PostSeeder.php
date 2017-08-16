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
        ['name'=>'Home Page','description'=>'','content'=>'<!-- First Blog Post -->
                <h2>
                    CONSAL Information
                </h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <p class="date"><i class="fa fa-calendar"></i> May 2-5,2018&nbsp;&nbsp;&nbsp;&nbsp;Naypyitaw,Myanmar</p>
                <br>
                <img src="/assets/frontend/images/date.jpg" class="img-responsive">
                <br>
                <h2>
                    Greeting From National Organizing Committee
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-success btn-custom" href="#">Read More</a>',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>1, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>2, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>3, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>4, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>5, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>6, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>7, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],       
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>8, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>9, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>10, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>11, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>12, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>13, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>14, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>15, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>16, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'Home Page','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>17, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION SPONSORSHIP','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>18, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'EXHIBITION EXHIBITOR','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>19, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'EXHIBITION BOOTH','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>20, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'EXHIBITION FLOOR PLAN','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>21, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'EXHIBITION AGREMEENT','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>22, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'TRAVEL ACCOMMODATION','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>23, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
       
       
    );

    DB::table('posts')->insert($objs);
}
}