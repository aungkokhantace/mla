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
        ['name'=>'HOME','description'=>'','content'=>'<!-- First Blog Post -->
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
        
        ['name'=>'PROGRAM','description'=>'','content'=>'<h2>PROGRAM >> PROGRAM TOPICS</h2>
    <ul class="p-list">
        <li>Access and Opportunities for all</li>
        <li>Advocacy (includes discussions on Library Associations)</li>
        <li>Digital Library Management</li>
        <li>Transforming libraries</li>
        <li>New competencies and training for library and information Professionals</li>
        <li>Marketing and Promotion</li>
        <li>Conservation and preservation (includes our ancient manuscripts)</li>
        <li>ASEAN vision and Libraries to include collaboration/educational efforts</li>
        <li>Media and Information Literacy (to include media and social media literacy)</li>
        <li>Strategic Alliances & Partnership</li>
    </ul>',
            'status' =>'active', 'url' =>'', 'title' =>'Home', 'post_order' =>1, 'pages_id' =>2, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        
        ['name'=>'REGISTRATION','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION', 'post_order' =>1, 'pages_id' =>3, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'EXHIBITION & SPONSORSHIP','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION & SPONSORSHIP', 'post_order' =>1, 'pages_id' =>4, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'TRAVEL & ACCOMMODATION','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'TRAVEL & ACCOMMODATIONs', 'post_order' =>1, 'pages_id' =>5, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'GALLERY','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'GALLERY', 'post_order' =>1, 'pages_id' =>6, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'CONTACT US','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'CONTACT US', 'post_order' =>1, 'pages_id' =>7, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],       
        ['name'=>'PROGREAM PRE-CONFERENCE','description'=>'','content'=>'<h2>PROGRAM >> PRE-CONFERENCE CONVENING</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
            'status' =>'active', 'url' =>'', 'title' =>'PROGREAM PRE-CONFERENCE', 'post_order' =>1, 'pages_id' =>8, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'PROGRAM CONFERENCE','description'=>'','content'=>' <h2>PROGRAM >> CONFERENCE PROGRAM OVERVIEW</h2>
                <table class="table table-bordered p-table">
                    <tr>
                        <td>Wednesday,2 May 2018(Day1)</td>
                        <td>
                            <ul>
                                <li>Executive Board Meeting</li>
                                <li>Re-registration and New Registration for general conference participants</li>
                                <li>Exhibition Opening </li>
                                <li>Poster Section Overview</li>
                            </ul>
                        </td>
                    </tr>
                     <tr>
                        <td>Thursday, 3 May 2018<br/>(Day2)</td>
                        <td>
                            <ul>
                                <li>Opening Ceremony</li>
                                <li>General Conference</li>
                                <li>Welcome Dinner</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Friday, 4 May 2018<br/>(Day3)</td>
                        <td>
                            <ul>
                                <li>General Conference</li>
                                <li>Closing Ceremony</li>
                                <li>Gala Dinner</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Saturday, 5 May 2018<br/>(Day4)</td>
                        <td>
                            <ul>
                                <li>Library and Cultural Visits</li>
                            
                            </ul>
                        </td>
                    </tr>
                </table>',
            'status' =>'active', 'url' =>'', 'title' =>'PROGRAM CONFERENCE', 'post_order' =>1, 'pages_id' =>9, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],


        ['name'=>'PROGRAM CALL','description'=>'','content'=>'
            <div class="col-md-9 poster" id="paper">
             <h2>PROGRAM >> CALL FOR PAPERS</h2>
            <form class="form-horizontal call_for_paper">
                <fieldset>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="author_affiliation">1st Author Affiliation</label>  
                  <div class="col-md-4">
                  <input id="author_affiliation" name="author_affiliation" type="text" placeholder="" class="form-control input-md">
                    
                  </div>
                </div>

                <!-- email -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                  </div>
                </div>

                <!-- Address-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">address</label>  
                  <div class="col-md-4">
                  <textarea class="form-control" id="address" name="address"></textarea>
                  </div>
                </div>

                <!-- 2nd Author-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="second_author">2nd Author</label>  
                  <div class="col-md-4">
                  <input id="second_author" name="second_author" type="text" placeholder="" class="form-control input-md">
                  </div>
                </div>

                <!-- 3rd Author-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="third_author">3rd Author</label>  
                  <div class="col-md-4">
                  <input id="third_author" name="third_author" type="text" placeholder="" class="form-control input-md">
                  </div>
                </div>

                <!-- Abstract -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="abstract">Abstract</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="abstract" name="abstract"></textarea>
                  </div>
                </div>

                 <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

                </fieldset>
                </form>
                <h4>Theme:</h4>
<p>“Next Generation Libraries: Collaborate and Connect”
In keeping with the theme of the CONSAL XVII, “Next Generation Libraries: Collaborate and Connect”, the Organizing Committee of CONSAL XVII invites papers for the General Conference. Open Session will focus on how libraries across our region are dealing with challenges to their traditional ways of working, and experimenting with new ways to continue serving the people of their diverse communities, whether in densely populated cities, remote rural communities, or in scattered island communities. We are seeking high-quality, thoughtful and inspiring papers, and we encourage professionals across the Asia-Pacific region to submit proposals for papers on topics relating to the session theme.
</p>
<h4>Topics:</h4>
<ul>
<li>Access and Opportunities for all</li>
<li>Advocacy (Includes Discussions on Library Associations)</li>
<li>Digital Library Management</li> 
<li>Transforming Libraries</li>
<li>New competencies and training for Library and Information Professionals</li>
<li>Marketing and Promotion</li>
<li>Conservation and Preservation (includes our ancient manuscripts)</li>
<li>ASEAN Vision and Libraries to include collaboration/ educational efforts</li>
<li>Media and Information literacy (to include media and social media literacy)</li>
<li>Strategic Alliances & Partnership</li>
</ul>
<p>
Members of CONSAL are welcome to propose papers demonstrating how work in their professional field could be applied across the Asia-Oceania region, provided that there is a clear link with the theme of our parallel sessions.</p>

<h4>Submissions:</h4>
<p>The deadline for submitting a detailed abstract (500 words) and full author details is 30 November 2017.</p> 
<p>Selection of papers is based on the abstract, and presenters will be notified whether they have been 
successful by 31 December 2017. The committee will evaluate the submitted abstracts against criteria which include: innovative content, topical relevance, regional interest, clarity of exposition, originality, and overall quality.</p>
<p>Papers must be original submissions not presented or published elsewhere.
Full texts of papers are due on 1 April 2018. Both abstracts and full papers should be submitted as a MS Word file by e-mail.</p>
<p>Papers should be no more than 4,000 words, single spaced in Times New Roman 12 point.
Papers and abstracts should be in English.
The author(s) should include their full contact details and brief biographical notes.</p>
 
<h4>Content of abstracts:</h4>
<p>Informative abstracts (500 words) should be prepared following the template provided below. Each 
abstract will be reviewed by members of the peer review committee. Abbreviated abstracts or late 
submissions will not be considered.</p>

<h4>Purpose of this paper</h4>
<p>What are the reason(s) for writing the paper (or the aims of the research)?</p>
<h4>Theme</h4>
How does it relate to the theme of the session?
Design, methodology, approach
How are the objectives achieved? Include the main method(s) used for the study.What is the approach to the topic, and what is the theoretical or subject scope of the paper?
Findings
What was found in the course of the work? This will refer to analysis, discussion, or results.
Research limitations and implications (if applicable)
If the paper reports on research, this section must be completed. It should include suggestions for future research and any identified limitations in the research process.
Practical implications (if applicable)
What outcomes and implications for practice, applications and consequences are identified? All papers should have practical applications. What changes to practice might be made as a result of this research/paper?

<h4>Originality</h4>
<p>What is new in the paper? State the value of the paper and to whom.</p>

<h4>Presentation of accepted papers:</h4>
<p>The presenter (who need not be the author) must be fluent in English: there will be no interpretation service at this open session.</p>
<p>15 minutes will be allowed in the session for a summary presentation based on the paper, with time for questions. Presenters should not read their full written paper.
Note: in general, CONSAL has no funds available to cover the cost of speakers’ attendance at the Congress. Any person submitting a paper proposal to CONSAL XVII is responsible for arranging his/her own travel funding. </p>

<h4>Deadline:</h4>
Please send your abstract by Saturday 30 November 2017 to:
<p>
Ms. Ah Win, Vice-President 1, Myanmar Library Association</br>
Email: ahwin2006@gmail.com</p>
<p>
Ms. Mya OO, Director, National Library of Myanmar<br/>
Email:  mya.myanmar65@gmail.com
and</p>
<p>
Dr. Hlaing Hlaing Gyi, Librarian, Yangon University Library<br/>
Email:  hlaingyu2010@gmail.com</p>
            </div>',
            'status' =>'active', 'url' =>'', 'title' =>'PROGRAM CALL', 'post_order' =>1, 'pages_id' =>10, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],


        ['name'=>'PROGRAM POSTER','description'=>'','content'=>'
            <div class="col-md-9 poster" id="poster">
             <h2>PROGRAM >> POSTER SESSIONS</h2>
            <form class="form-horizontal">
                <fieldset>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="address">Address</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="address" name="address"></textarea>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                    
                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="description">Description</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="description" name="description"></textarea>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Title</label>  
                  <div class="col-md-4">
                  <input id="title" name="title" type="text" placeholder="" class="form-control input-md">
                    
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="author_affilliation">Author Affilliation</label>  
                  <div class="col-md-4">
                  <input id="author_affilliation" name="author_affilliation" type="text" placeholder="" class="form-control input-md">
                    
                  </div>
                </div>

                 <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

                </fieldset>
                </form>
            </div>',
            'status' =>'active', 'url' =>'', 'title' =>'PROGRAM POSTER', 'post_order' =>1, 'pages_id' =>11, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],


        ['name'=>'PROGRAM GUIDELINE','description'=>'','content'=>'<div class="col-md-3">
                <div class="list-group">
                    <a href="index.html" class="list-group-item">Program Topics</a>
                    <a href="about.html" class="list-group-item">Pre-conference Convencing</a>
                    <a href="conference_program_overview.html" class="list-group-item">Conference Program Overview</a>
                    <a href="#" class="list-group-item">Call for Papers</a>
                    <a href="#" class="list-group-item">Poster Sessions</a>
                    <a href="guideline.html" class="list-group-item active-sub">Guideline for the Authors and Presenters</a>
                    <a href="library_culture_visit.html" class="list-group-item">Library and Culture visit</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h2>PROGRAM >> GUIDELINES FOR AUTHORS AND PRESENTERS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>',
            'status' =>'active', 'url' =>'', 'title' =>'PROGRAM GUIDELINE', 'post_order' =>1, 'pages_id' =>12, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],


        ['name'=>'PROGRAM LIBRARY','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'PROGRAM LIBRARY', 'post_order' =>1, 'pages_id' =>13, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'REGISTRATION FEE','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION FEE', 'post_order' =>1, 'pages_id' =>14, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'REGISTRATION CANCELLATION','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION CANCELLATION', 'post_order' =>1, 'pages_id' =>15, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'REGISTRATION LETTER','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION LETTER', 'post_order' =>1, 'pages_id' =>16, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'REGISTRATION VISA','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION VISA', 'post_order' =>1, 'pages_id' =>17, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION SPONSORSHIP','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION SPONSORSHIP', 'post_order' =>1, 'pages_id' =>18, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION EXHIBITOR','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION EXHIBITOR', 'post_order' =>1, 'pages_id' =>19, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION BOOTH','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION BOOTH', 'post_order' =>1, 'pages_id' =>20, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION FLOOR PLAN','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION FLOOR PLAN', 'post_order' =>1, 'pages_id' =>21, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION AGREMEENT','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION AGREMEENT', 'post_order' =>1, 'pages_id' =>22, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'TRAVEL ACCOMMODATION','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'TRAVEL ACCOMMODATION', 'post_order' =>1, 'pages_id' =>23, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
       
       
    );

    DB::table('posts')->insert($objs);
}
}