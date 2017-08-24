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
        
            ['name'=>'EXHIBITION & SUPPORTERS','description'=>'','content'=>'<h2>EXHIBITION & SPONSORSHIP >> SPONSORS AND SUPPORTERS </h2>
           <div class="col-md-12">
               <div class="row">
                   <h3>Platinum Package</h3>
                   <hr>
                   <img style="margin-bottom:30px;" src="/assets/frontend/images/bottom1.jpg">
               </div>
           </div> 
           <br/> 
            <div class="col-md-12">
               <div class="row">
                   <h3>Gold Package</h3>
                   <hr>
                   <img style="margin-bottom:30px;" src="/assets/frontend/images/bottom2.jpg">
               </div>
           </div> 
           <br/>
            <div class="col-md-12">
               <div class="row">
                   <h3>Silver Package</h3>
                   <hr>
                   <img src="/assets/frontend/images/bottom3.jpg">
               </div>
           </div> 
           <br/>
            <div class="col-md-12">
               <div class="row">
                   <h3>Bronze Package</h3>
                   <hr>
                   <img src="/assets/frontend/images/bottom4.jpg">
               </div>
           </div> 
           ',
            'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION & SUPPORTER', 'post_order' =>1, 'pages_id' =>4, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        
            ['name'=>'TRAVEL & ACCOMMODATION','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'TRAVEL & ACCOMMODATIONs', 'post_order' =>1, 'pages_id' =>5, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'GALLERY','description'=>'','content'=>'',
            'status' =>'active', 'url' =>'', 'title' =>'GALLERY', 'post_order' =>1, 'pages_id' =>6, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        ['name'=>'CONTACT US','description'=>'','content'=>'
        <div class="col-md-6">
        <h2>Contact Us</h2>
            <p> 
                Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Maha Thukha Road, Naypyidaw, Myanmar
            </p>
            <br/>
            <p>
                Email/Gmail&nbsp;: consal@sample.com</p>
            </br/>
            <p> 
            Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: +95 67 421 072</p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
        <iframe class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1qh12QBAgnozfHPAHd_1KAOoY80U" width="500" height="400"></iframe>
        </div>
        ',
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
            <td>Monday, 2 May 2018<br/>(Day 1)</td>
            <td>
                <ul>
                    <li>Executive Board Meeting (exclusive to Executive Board Members)</li>
                    <li>Re-registration and New Registration for general conference participants
                </li>
                </ul>
            </td>
        </tr>
         <tr>
            <td>Tuesday, 3 May 2018<br/>(Day 2)</td>
            <td>
                <ul>
                    <li>Opening Ceremony</li>
                    <li>General Conference</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Wednesday, 4 May 2018<br/>(Day 3)</td>
            <td>
                <ul>
                    <li>General Conference</li>
                    <li>Closing Ceremony</li>
                    <li>Gala Dinner</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Thursday, 5 May 2018<br/>(Day 4)</td>
            <td>
                <ul>
                    <li>Library and Cultural Visits</li>
                
                </ul>
            </td>
        </tr>
    </table>
    <h3> Day 1 / Monday, 2 May 2018 : 3rd Executive Board Meeting</h3>
    <span>This event is exclusive to Executive Board Members.</span>
    <table class="table table-bordered p-table-two">
        <tr>
            <td class="left">06.00 – 07.00</td>
            <td>
                Breakfast
            </td>
        </tr>
         <tr>
            <td>08.00 – 12.00</td>
            <td>
                3rd Meeting of CONSAL XVII Executive Board at Grand Ballroom, Mingalar Thiri Hotel, Naypyitaw
            </td>
        </tr>
        <tr>
            <td>12.00 – 13.00</td>
            <td>
                Lunch
            </td>
        </tr>
        <tr>
            <td>13.00 – 18.00</td>
            <td>
                26th CDNL-AO Meeting, at Grand Ballroom, Mingalar Thiri Hotel, Naypyitaw
            </td>
        </tr>
        <tr>
            <td>18.30 – 19.00</td>
            <td>
                Opening of CONSAL Exhibition at Myanmar International Convention Center 2, Naypyitaw
            </td>
        </tr>
        <tr>
            <td>20.00 – 22.00</td>
            <td>
                Welcome dinner and cultural performance hosted by the Department of Historical Research and National Library (Grand Ballroom, Mingalar Thiri Hotel)
            </td>
        </tr>
    </table>
    <h3>For General Conference Participants</h3>
    <table class="table table-bordered p-table-two">
         <tr>
            <td>08.00 – 22.00</td>
            <td>
                <ul>
                    <li>Re-registration</li>
                    <li>Onsite Registration for new participants
                </li>
                </ul>
                Venue : Lobby, Myanmar International Convention Center 2, Naypyitaws
            </td>
        </tr>
    </table>
    <h3>Day 2 / Tuesday, 3 May 2018:  Opening Ceremony, General Conference (Plenary)</h3>
    <table class="table table-bordered p-table-two">
         <table class="tg">
              <tr>
                <th class="tg-031e" colspan="3">Tuesday, 3 May 2018<br/>Room: Plenary Hall, MICC2</th>
              </tr>
              <tr>
                <td class="tg-yw4l right" rowspan="2">08.30 - 10.30</td>
                <td class="tg-yw4l">Opening Ceremony</td>
                <td class="tg-yw4l left" rowspan="4">Plenary Hall, MICC 2</td>
              </tr>
              <tr>
                <td class="tg-yw4l">
                <ul><li>Opening Remark by State Counselor, Republic of the Union of Myanmar</li>
                <li>Welcome Remark by President of,IFLA</li>
                <li>Welcome Performance,Photo Session</li>
                </td>
              </tr>
              <tr>
                <td class="tg-yw4l right">10.30 – 11.00</td>
                <td class="tg-yw4l">Coffee Break</td>
              </tr>
              <tr>
                <td class="tg-yw4l right">11. 00 – 12.30</td>
                <td class="tg-yw4l">Plenary Session</td>
              </tr>
              <tr>
                <td class="tg-yw4l right">11.00 – 11. 10</td>
                <td class="tg-yw4l">President, IFLA</td>
                <td class="tg-yw4l" rowspan="3">Plenary Hall,,MICC 2</td>
              </tr>
              <tr>
                <td class="tg-yw4l right">11.10 – 11.20</td>
                <td class="tg-yw4l">Sithu Dr. Thaw Kaung</td>
              </tr>
              <tr>
                <td class="tg-yw4l right">11.20 – 11.30</td>
                <td class="tg-yw4l">CONSAL</td>
              </tr>
              <tr>
                <td class="tg-yw4l right">11.30 – 12.30</td>
                <td class="tg-yw4l">Invited Papers (10<br>countries)</td>
                <td class="tg-yw4l"></td>
              </tr>
              <tr>
                <td class="tg-yw4l right">12.30 – 13.30</td>
                <td class="tg-yw4l">Lunch</td>
                <td class="tg-yw4l"></td>
              </tr>
              <tr>
                <td class="tg-yw4l right">13.30 – 18.10</td>
                <td class="tg-yw4l">Parallel Sessions</td>
                <td class="tg-yw4l">Session Rooms, MICC 2</td>
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


        ['name'=>'PROGRAM GUIDELINE','description'=>'','content'=>'
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
       
            ['name'=>'REGISTRATION FEE','description'=>'','content'=>'<div class="col-md-9 reg_fee_payment" id="reg_fee_payment">
            <h2>PROGRAM >> REGISTRATION FEES AND PAYMENTS</h2>
                <table class="table table-bordered p-table">
                <tr>
                    <td></td>
                    <td>
                    Early Bird
                    </td>
                    <td>Onsite</td>
                </tr>
                <tr>
                    <td>International Delegate </td>
                    <td>
                        $300
                    </td>
                    <td>$350</td>
                </tr>
                <tr>
                    <td>Local Delegate(Member)</td>
                    <td>
                        20,000 MMK
                    </td>
                    <td>25,000 MMK</td>
                </tr>
                <tr>
                    <td>Local Delegate (Non Member)</td>
                    <td>
                        30,000 MMK
                    </td>
                    <td>35,000 MMK</td>
                </tr>
                <tr>
                    <td>Student</td>
                    <td>10,000 MMK</td>
                    <td>15,000 MMK</td>
                </tr>
            </table>
           </div>
       </div>',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION FEE', 'post_order' =>1, 'pages_id' =>14, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
       
            ['name'=>'REGISTRATION CANCELLATION','description'=>'','content'=>'
            <h2>PROGRAM >> CANCELLATIONS</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION CANCELLATION', 'post_order' =>1, 'pages_id' =>15, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        
            ['name'=>'REGISTRATION LETTER','description'=>'','content'=>'
            <h2>PROGRAM >> LETTER OF INVITATIONS</h2>
            <p>
            Dear: 
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>Sincerely,</br>
            John Doe</p>',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION LETTER', 'post_order' =>1, 'pages_id' =>16, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        
            ['name'=>'REGISTRATION VISA','description'=>'','content'=>'
            <h2>PROGRAM >> VISA REQUIREMENTS</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION VISA', 'post_order' =>1, 'pages_id' =>17, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION SPONSORSHIP','description'=>'','content'=>'
        <h2>EXHIBITION & SPONSORSHIP >> EXHIBIT & SPONSORSHIPS </h2>
       <div class="col-md-12">
           <div class="row">
               <p>
                   The Organizing Committee of the Congress of Southeast Asian Libraries (CONXAL XVII) offers the opportunity to become a sponsor/partner in order to support for the development of libraries in the region. This opportunity will bring you to gain the great experience and successful marketing image for your business.
               </p>

               <div class="table-responsive">
                 <table class="table table-bordered">
                   <tr>
                       <td>No</td>
                       <td>Type/Value</td>
                       <td>Facilities</td>
                   </tr>
                   <tr>
                       <td>1</td>
                       <td>Platinum Package <br/><br/> 12,500 $</td>
                       <td>
                           <ul>
                               <li>Logo featured on each banner, backdrop, promotional materials</li>
                           <li>One allocated exhibition booth with the size of 3m 3m</li>
                           <li>30 minutes promotional session in the Conference</li>
                           <li>Conference Folder,2 Conference Participants</li>
                           <li>Media advertising as a sponsor of CONSAL XVII</li>
                           </ul>
                       </td>
                   </tr>
                   <tr>
                       <td>2</td>
                       <td>Gold Package<br/><br/> 10,000 $</td>
                       <td>
                           <ul>
                               <li>Logo featured on each banner, backdrop, promotional materials</li>
                               <li>One allocated exhibition booth with the size of 3m 3m</li>
                               <li>25 minutes promotional session in the Conference</li>
                               <li>Conference Folder,1 Conference Participants</li>
                           </ul>
                       </td>
                   </tr>
                   <tr>
                       <td>3</td>
                       <td>Silver Package<br/><br/> 5000 $</td>
                       <td>
                           <ul>
                               <li>One allocated exhibition booth with the size of 3m 3m</li>
                               <li>20 minutes promotional session in the Conference</li>
                               <li>Conference Folder</li>
                           </ul>
                       </td>
                   </tr>
                   <tr>
                       <td>4</td>
                       <td>Bronze Package<br/><br/> 3000 $</td>
                       <td>
                           <ul>
                               <li>One allocated exhibition booth with the size of 3m 3m</li>
                               <li>Conference Folder</li>
                           </ul>
                       </td>
                   </tr>
                   <tr>
                       <td>5</td>
                       <td>Local Business Package <br/><br/> 500 $</td>
                       <td>
                           <ul>
                               <li>One allocated exhibition booth with the size of 3m 3m</li>
                           </ul>
                       </td>
                   </tr>
                   <tr>
                       <td>6</td>
                       <td>Other forms of Sponsorship</td>
                       <td>
                           <ul>
                               <li>Evening Reception Host Sponsor</li>
                               <li>Delegate lunch sponsor</li>
                               <li>Coffee & Tea Sponsor</li>
                               <li>Registration Sponsor</li>
                           </ul>
                       </td>
                   </tr>
                   <tr>
                       <td></td>
                       <td></td>
                       <td>
                           <ul>
                               <li>Exhibition Sponsor</li>
                               <li>Conferece Folder Sponsor</li>
                           </ul>
                       </td>
                   </tr>
                 </table>
                 <p>Contact information for further information on the packages or any of your business ideas regarding sponsorship.</p>
                   <span style="font-weight:bold;">President</span><br/>
                   U Than Aung<br/>
                   Phone : 09795624209<br/>
                   email: thanaungmla@gmail.com
                   <br/>
                   <br/>
                    <span style="font-weight:bold;">Vice President 1</span><br/>
                   Daw Ah Win<br/>
                   Phone : 00959250354354<br/>
                   email: ahwin2006@gmail.com
                   <br/><br/>
                    <span style="font-weight:bold;">Vice-President 2</span><br/>
                   Daw Myat Sann Nyein<br/>
                   Phone : 009595186398<br/>
                   email: myatsann.nyein@gmail.com
                   <br/><br/>
                    <span style="font-weight:bold;">Secretary General</span><br/>
                   Daw Mya Oo<br/>
                   Phone : 00959420728446<br/>
                   email: mya.myanmar65@gmail.com  
               </div>
           </div>
       </div>',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION SPONSORSHIP', 'post_order' =>1, 'pages_id' =>18, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION EXHIBITOR','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION EXHIBITOR', 'post_order' =>1, 'pages_id' =>19, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION BOOTH','description'=>'','content'=>'<div class="col-md-9 col-sm-12 col-xs-12 exhibit" id="booth">
        <h2>EXHIBITION & SPONSORSHIP >> BOOTH PRICE AND FACILITES</h2>
           <div class="col-md-12">
               <div class="row">
                   <p>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                       doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite
                       cto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                   </p>
               </div>
           </div>
       </div>',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION BOOTH', 'post_order' =>1, 'pages_id' =>20, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION FLOOR PLAN','description'=>'','content'=>'<h2>EXHIBITION & SPONSORSHIP >> FLOOR PLAN AND EXHIBITIONS</h2>
           <div class="col-md-12" style="margin-bottom:170px;">
               <div class="row">
                   <img src="assets/frontend/images/floor_plan.jpg" class="img-responsive">
               </div>
           </div>',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION FLOOR PLAN', 'post_order' =>1, 'pages_id' =>21, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION AGREMEENT','description'=>'','content'=>'
        <h2>EXHIBITION & SPONSORSHIP >> EXHIBITORS AND SPONSOR AGREEMENT</h2>
           <div class="col-md-12" style="margin-bottom: 170px;">
               <div class="row">
                   <p>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                       doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite
                       cto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                   </p>
               </div>
           </div>',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION AGREMEENT', 'post_order' =>1, 'pages_id' =>22, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'TRAVEL ACCOMMODATION','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'TRAVEL ACCOMMODATION', 'post_order' =>1, 'pages_id' =>23, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
       
       
    );

    DB::table('posts')->insert($objs);
}
}