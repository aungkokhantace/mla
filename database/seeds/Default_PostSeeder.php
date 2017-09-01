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
         <p>Congress of Southeast Asia Librarians (CONSAL) is the sole regional organization of the libraries, library schools, Library Associations, and related institutions of the ASEAN countries. It was founded in Singapore in 1970 and has  ten members which include the library associations and librarians of Brunei, Cambodia, Indonesia, Lao, Malaysia, Myanmar, Philippines, Singapore, Thailand, and Vietnam. </p>
        <p>CONSAL holds a general conference every three years in each member country by turn and promotes cooperation among librarians in Southeast Asia Region.   CONSAL provides the forum for the librarians and information specialists to strengthen networks, partnerships, and linkages with each other; promotes coordination, collaboration, and provides the platform for sharing and exchange of information and experiences on issues in the fields of librarianship, library and information sciences, documentation, information and related activities in the region. </p>
        <p>CONSAL XVII is acting as a leading force in developing strategic relationships, undertaking the collaborative activities, and taking the good advantages for significant opportunities for the libraries in the  Region.</p>
        <p>We need to join our strength together to provide access to information for all citizens, preserving and access to the culture and heritage, advancing digital inclusion through new technologies, promoting universal literacy, and serving as the heart of the lifelong learning opportunities for our society.</p>
        <p class="date"><i class="fa fa-calendar"></i> May 2-5,2018&nbsp;&nbsp;&nbsp;&nbsp;Naypyitaw,Myanmar</p>
        <br>
        <!--<img src="/assets/frontend/images/date.jpg" class="img-responsive">-->
        <div class="row">
        <div class="col-md-2 count_down" id="days">DAYS</div>
        <div class="col-md-2 count_down" id="hours">HOURS</div>
        <div class="col-md-2 count_down" id="minutes">MINUTES</div>
        <div class="col-md-2 count_down" id="seconds">SECONDS</div>
        </div>
        <br>
        <h2>
            Greeting From National Organizing Committee
        </h2>
        <p>Welcome to CONSAL XVII in Naypyitaw!</p>
        <p>On behalf of the Organizing Committee of 17th CONSAL, we are pleased to invite you to the 17th Congress of Southeast Asian Librarians in Naypyitaw, Myanmar.</p>
        <p>The Theme of the CONSAL XVII is "Next Generation Libraries: Collaborate and Connect."</p>
        <img class="head-of-mla-photo" src="/assets/frontend/images/head_mla.jpg">
        <br><br>
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
        ['name'=>'CONTACT US','description'=>'','content'=>'        <div class="col-md-6">
        <h3>CONTACT US</h3>
        <h5><b>Organizing Committee</b></h5>
        <h5><b>Ministry of Religious Affairs and Culture</b></h5>
        <p>
        No. 35, Naypyitaw, Myanmar<br>
        Tel:	95 67 408036<br>
        Fax:	95 67 408136<br>
        </p>
        
        <h5><b>Myanmar Library Association</b></h5>
        <p>
        #003, University Diamond Jubilee Hall,<br>
        Kamaryut TSP., Yangon, Myanmar<br>
        Email: <a href="http://libraryassociation@mlamyanmar.org">libraryassociation@mlamyanmar.org</a><br>
        </p>
        
        <h5><b>Congress Secretariat</b></h5>
        <h5><b>National Library of Myanmar (Naypyitaw)</b></h5>
        <p>
        # Razathingaha Road, Nearby Razathingaha Circle,<br>
        Uottra Thiri TSP., Naypyitaw, Myanmar<br>
        Tel: 	95 67 418427; 418426<br>
        Fax:	95 67 418426<br>
        Email:	info@consalxvii.org<br>
        </p>
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
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
            'status' =>'active', 'url' =>'', 'title' =>'PROGRAM GUIDELINE', 'post_order' =>1, 'pages_id' =>12, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],


        ['name'=>'PROGRAM LIBRARY','description'=>'','content'=>'<h4>Library and Cultural Visit</h4>
        <p>Library and Cultural Visits require pre-registration at the Registration Booth by 3rd May 2018.</p>
        <br>
        <h4>Hluttaw (the Parliament)</h4>
        <p>The Assembly of the Union is the national-level bicameral legislature of Myanmar (officially known as the Republic of the Union of Myanmar) established by the 2008 National Constitution. </p>
        
        <img class="head-of-mla-photo" src="/assets/frontend/images/hluttaw_resized.jpg">
        <br><br>
        <p><b>The Pyidaungsu Hluttaw</b> is made up of two houses, the Amyotha Hluttaw (House of Nationalities), a 224-seat upper house as well as the Pyithu Hluttaw, a 440-seat lower house (House of Representatives). The Pyidaungsu Hluttaw is housed in a 31-building complex, which is believed to represent the 31 planes of existence in Buddhist cosmology, located in Zeya Theddhi Ward of Naypyidaw.</p>
        <br>
        <h4>The National Library (Naypyitaw)</h4>
        
        <img class="head-of-mla-photo" src="/assets/frontend/images/national_library_resized.jpg">
        <br><br>
        
        <p>The National Library (Naypyidaw) is located near the Kumudra circle, in Ottarathiri Township, Naypyidaw, Myanmar. The foundation was laid down in 2010 and the library was open to the public in 2013. The National Library of Myanmar is one of the national level institutions of the country under the auspices of the Ministry of Culture. The Library provides the following services: References Services, Reading Room Services, Periodical Services, Children’s Corner Services, Photocopying Services, Library and Internet Services. </p>
        <br>
        <h4>The National Museum (Naypyitaw)</h4>
        <p>The National Museum (Naypyidaw) is located near the Kumudra circle, in Ottarathiri Township, Naypyidaw, Myanmar. Total plot area of the museum is 34.79 acres (14.08 ha). The construction of the museum was started on 3 June 2010. The Museum was opened on 15 July 2015. </p>
        
        <img class="head-of-mla-photo" src="/assets/frontend/images/national_museum_resized.jpg">
        <br><br>
        <p>The museum has five wings: A,B,C,D and E. In the hall A, mini theatre, VIP holding rooms, president\'s gifts exhibition room and public areas are included. The exhibition rooms are Primates and Fossils Exhibition Room, Pre Historic Period Exhibition Room, Proto Historic Period Exhibition Room, Historic Period Exhibition Room, Myanmar Art Gallery and Myanmar Performing Arts Exhibition Room.</p>
        <br>
        <h4>Gem Museum</h4>
        <img class="head-of-mla-photo" src="/assets/frontend/images/gem_museum_resized.jpg">
        <br><br>
        
        <p>The Gem Museum Located in Zabuthri Township. Naypyitaw. The large area of upstairs museum decorated with large wall glasses and beautiful and wonderful decorations in modern designs. In Gems Museum, precious jewels such as ruby and sapphire, quality jade lots and the largest pearl in Myanmar are put on display. Normally. it opens from 9:30 am to 4:00 pm except Monday and Government holidays.</p>
        ',
            'status' =>'active', 'url' =>'', 'title' =>'PROGRAM LIBRARY', 'post_order' =>1, 'pages_id' =>13, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
       
            ['name'=>'REGISTRATION FEE','description'=>'','content'=>'<div class="col-md-9 reg_fee_payment" id="reg_fee_payment">
            <h2>PROGRAM &gt;&gt; REGISTRATION FEES AND PAYMENTS</h2>

<h4>Registration Information</h4>
<p>Any person, delegate, accompanying person, student, media representative, speaker, or exhibitor is considered an attendee.</p>
<p>Early Registration deadline: 	31 January 2018</p>
<p>Standard Registration deadline:	29 April 2018</p>
<p>Onsite Registration: 		from 30 April 2018</p>

<table class="table table-bordered p-table">
<tbody>
<tr>
     <td></td>
     <td>Early Bird</td>
     <td>Standard</td>
     <td>Onsite</td>
</tr>
<tr>
     <td>International Delegate </td>
     <td>$250</td>
     <td>US$ 300</td>
     <td>US$ 350</td>
</tr>
<tr>
     <td>Local Delegate(MLA Member)**</td>
     <td>20,000 MMK</td>
     <td></td>
     <td>30,000 MMK</td>
</tr>
<tr>
      <td>Local Delegate (Non MLA Member)</td>
      <td>30,000 MMK</td>
      <td></td>
      <td>40,000 MMK</td>
</tr>
<tr>
      <td>Student(Local)***</td>
      <td>15,000 MMK</td>
      <td></td>
      <td>20,000 MMK</td>
</tr>
</tbody>
</table>

<p>Only fully completed registrations will be accepted. The registration fee is based on the date of the receipt of the registration and the payment in full in accordance with the deadlines mentioned above. </p>

<h4>Registration Fees</h4>
<p>The registration fee for regular delegates includes:</p>
<ul>
<li>Admission to the congress, the sessions and the exhibition</li>
<li>Congress Material</li>
<li>Opening / Closing Session, Farewell Dinner</li>
<li>One local library visit (based on availability)</li>
</ul>

<p>Please contact Myanmar Library Association for the correct membership number. This number should be entered on the registration form.</p>
<p>To be able to register as a student, you must present a proof of fulltime enrolment at a recognised university or college for both the time of registration and during the Congress. </p>
<p>Media people have to register and submit all records in various forms on Congress to the Organizing Committee. Media representative, you must submit a copy of your official press card.</p>

<p>All prices, categories and dates are indicative and subject to change.<br>
**  MLA membership number requested<br>
*** Student ID or official letter of University must be provided
</p>

<h5><b><i>Congress Material</i></b></h5>
<p>If the registration form and full payment are received, a Congress Bag is included in the registration fee for full delegates, students, speakers and media representatives. All Congress materials will be handed out onsite at the Congress Bag counter. </p>

<h5><b><i>Methods of Payment</i></b></h5>
<p>All registration fees should be paid by Bank Transfer. Please do not forget to indicate your first and last name on the payment. Please make sure all bank fees are covered by the submitting account and that the payment is free of charge for the receiver account. Please mention your first and last name and "CONSAL XVII" on the bank transfer. Payment by bank transfer is only possible until 29 April 2018.</p>

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
        
            ['name'=>'REGISTRATION LETTER','description'=>'','content'=>'<h2>PROGRAM &gt;&gt; LETTER OF INVITATION</h2>
            <h5><b><i>Letter of Invitation</i></b></h5>
            <p>Individuals requiring an official Letter of Invitation can request one through the Organizing Committee: <span class="red_span"><b>info@consalxvii.org</b></span></p>
            <p>The Letter of Invitation does not financially obligate the Congress organizers in any way. All expenses incurred in relation to the Congress are the sole responsibility of the attendee.</p>',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION LETTER', 'post_order' =>1, 'pages_id' =>16, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
        
            ['name'=>'REGISTRATION VISA','description'=>'','content'=>'<h2>PROGRAM &gt;&gt; VISA REQUIREMENTS</h2>
            <p>
            It is the sole responsibility of the attendee to take care of his / her visa requirements. Attendees who require an entry visa must allow sufficient time for the application procedure. Attendees should contact the nearest embassy or consulate to determine the appropriate timing of their visa applications. It is recommended to apply for a visa at least 3 months in advance of the Congress. 
            </p>',
            'status' =>'active', 'url' =>'', 'title' =>'REGISTRATION VISA', 'post_order' =>1, 'pages_id' =>17, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION SPONSORSHIP','description'=>'','content'=>'        <h2>EXHIBITION &amp; SPONSORSHIP &gt;&gt; EXHIBIT &amp; SPONSORSHIPS </h2>
        <div class="col-md-12">
            <div class="row">
                <p>The Organizing Committee of the Congress of Southeast Asian Librarians (CONSAL XVII) offers the opportunity to become a sponsor/partner to support the development of libraries in the Region. This opportunity will bring you to gain the great experience and successful marketing image for your business.</p>
 
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tbody><tr>
                        <td>Sponsorship packages No.</td>
                        <td>Type/Value</td>
                        <td>Facilities</td>
                    </tr>
                    <tr>
                        <td>Platinum Package</td>
                        <td>US$ 12,500</td>
                        <td>
                            <ul>
                            <li>Logo featured on each banner,  backdrop, promotional materials   
 One allocated exhibition booth with size of 3m x 3m</li>
                            <li>30 minutes promotional session in the Conference</li>
                            <li>Conference Folder, 2 Conference Participants
 Media advertising as a sponsor of CONSAL XVII</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Gold Package</td>
                        <td>US$ 10, 000</td>
                        <td>
                            <ul>
                                <li>Logo featured on each banner, backdrop, promotional materials</li>
                                <li>One allocated exhibition booth with the size of 3m x 3m</li>
                                <li>25 minutes promotional session in the Conference</li>
                                <li>Conference Folder, 1 Conference Participant</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Silver Package</td>
                        <td>US$ 5, 000</td>
                        <td>
                            <ul>
                                <li>One allocated exhibition booth with the size of  3m x 3m</li>
                                <li>20 minutes promotional session in the Conference</li>
                                <li>Conference Folder</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Bronze Package</td>
                        <td>US$ 3, 000</td>
                        <td>
                            <ul>
                                <li>One allocated exhibition booth with the size of  3m x 3m</li>
                                <li>Conference Folder</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Local Business Package</td>
                        <td>US$ 500</td>
                        <td>
                            <ul>
                                <li>One allocated exhibition booth with the size of 3m 3m</li>
                            </ul>
                        </td>
                    </tr>
                  </tbody></table>
 
 <h5><b>Other forms of sponsorship</b></h5>
 <ul>
 <li>Evening Reception Host Sponsor</li>
 <li>Delegate Lunch Sponsor</li>
 <li>Coffee &amp; Tea Sponsor</li>
 <li>Registration Sponsor</li>
 <li>Exhibition Sponsor</li>
 <li>Conference Folder Sponsor</li>
 </ul>
 
 <p><b>Contact information for further information on the packages or any of your businesses ideas regarding sponsorship</b></p>
                   
                    <span class="red_span">Name : Daw Ni Ni Aye<br>
                    Phone No. : +9595192681<br>
                    Office : +9567414510<br>
                    email: : <a href="http://sponsors@consalxvii.org">sponsors@consalxvii.org</a>
                    <br></span>
                </div>
            </div>
        </div>',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION SPONSORSHIP', 'post_order' =>1, 'pages_id' =>18, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION EXHIBITOR','description'=>'','content'=>'',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION EXHIBITOR', 'post_order' =>1, 'pages_id' =>19, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION BOOTH','description'=>'','content'=>'<div class="col-md-9 col-sm-12 col-xs-12 exhibit" id="booth">
        <h2>EXHIBITION &amp; SPONSORSHIP &gt;&gt; BOOTH PRICE AND FACILITES</h2>
           <div class="col-md-12">
               <div class="row">
                   <p>This exhibition will provide a unique opportunity to promote your products, undertake research and promote services to researchers from all over the world.</p>
                   <p>The exhibition takes place at the Main Lobby Void of MICC II. It forms the hub of the Congress and provides an excellent opportunity for attendees to interact with exhibitors. In addition to the commercial exhibits, the poster session, and product demonstrations area will be provided to ensure maximum participant through the Exhibition.</p>
                   <p>Registration will open on October 6, 2017.</p>

                   <h5><b><i>Booth price and benefits</i></b></h5>
                   <table class="table table-bordered">
                   <tbody>
                   <tr>
                       <td>Early Registration<br>Before Feb. 2, 2018</td>
                       <td>Regular Registration<br>After Feb. 2, 2018</td>
                       <td>Benefits</td>
                   </tr>
                   <tr>
                       <td>US$ 450<br>Before Feb. 2, 2018</td>
                       <td>US$ 500<br>After Feb. 2, 2018</td>
                       <td>
                         <ul>
                            <li>1 full conference registration</li>
                            <li>3 m x 3 m exhibition space</li>
                            <li>Power outlets</li>
                            <li>1 table and 2 chairs</li>
                            <li>Internet access</li>
                         </ul>
                       </td>
                   </tr>
                   </tbody></table>

                   <h5><b><i>Booth price and benefits</i></b></h5>
                   <p>Exhibition space will be assigned on a ‘first-come, first-served’ basis within the respective sponsorship levels, according to the date of the exhibition space booking and the date of the receipt of the payment.</p>
                   <p>The square meter price includes raw exhibition space, shell scheme packages will be available to book through email: <a href="http://exhibitions@consalxvii.org">exhibitions@consalxvii.org </a> </p>
                   <p>Take the great marketing opportunities to showcase your products!</p>
               </div>
           </div>
       </div>',
        'status' =>'active', 'url' =>'', 'title' =>'EXHIBITION BOOTH', 'post_order' =>1, 'pages_id' =>20, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],

        ['name'=>'EXHIBITION FLOOR PLAN','description'=>'','content'=>'<h2>EXHIBITION &amp; SPONSORSHIP &gt;&gt; FLOOR PLAN AND EXHIBITIONS</h2>
        <div class="col-md-12" style="margin-bottom:170px;">
            <div class="row">
                <img src="assets/frontend/images/floor_plan_1.jpg" class="img-responsive">
            </div>
            <div class="row">
                <img src="assets/frontend/images/floor_plan_2.jpg" class="img-responsive">
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

        ['name'=>'TRAVEL ACCOMMODATION','description'=>'','content'=>'<h2>TRAVEL &amp; ACCOMMODATIONS &gt;&gt; ACCOMMODATIONS</h2>
        <p>Recommended Hotel List in Naypyitaw</p>
        <table class="table table-bordered p-table">
        <tbody>
        <tr>
             <td>
        <b>Mingalar Thiri Hotel</b><br>
        Datkhina Thiri City, Hotel Zone-1, <br>
        Naypyitaw, Union of Myanmar<br>
        Phone: +95 (67) 422140, up to 422159 (20 Lines)<br>
        Fax: +95(67) 422143, 422144, Hot Line : +95 (67) 422155<br>
        Email: <a href="http://inquiry@mingalarthiri-hotel.com">inquiry@mingalarthiri-hotel.com</a><br>
        Website: <a href="http://www.mingalarthirihotel.com">www.mingalarthirihotel.com</a><br>
             </td>
             <td>
        <b>Yadanar Theingha Hotel</b><br>
        H 6, Hotel Zone 1, Rarzathingaha Road, <br>
        Naypyitaw, Myanmar<br>
        Tel: +95 67 421911, 421922, 421933, <br>
        421944, 421955<br>
        Fax: + 95 67 421910<br>
        Email: <a href="http://hotelyadanatheingha6@gmail.com ">hotelyadanatheingha6@gmail.com </a>
             </td>
        </tr>
        <tr>
             <td>
        <b>Myat Taw Win Hotel</b><br>
        No. 4, Rarzathingaha Road, Naypyitaw,<br>
        Myanmar<br>
        Tel - (95) 067- 420731, 32, 33, to 420736<br>
        Hot Line - (95) 067-414141<br>
        Fax - (95) 067-414151<br>
        Email: <a href="http://info@hotelmyattawwin.com">Email: info@hotelmyattawwin.com </a><br>
             </td>
             <td>
        <b>Sky Palace Hotel</b><br>
        Datkhina Thiri City, Hotel Zone-1,<br>
        Naypyitaw, Myanmar<br>
             </td>
        </tr>
        <tr>
             <td>
        <b>Shwe Myanmar Hotel</b><br>
        No. 9, Datkhina Thiri City, Hotel Zone-1, <br>
        Naypyitaw, Myanmar<br>
        Tel: +95 67 414178<br>
        </td>
             <td>
        <b>Royal Naypyitaw Hotel</b><br>
        No. 5, Datkhina Thiri City, Hotel Zone-1  <br>
        Naypyitaw, Myanmar<br>
        </td>
        </tr>
        <tr>
             <td>
        <b>Zabuthiri Hotel</b><br>
        No.8, Datkhina Thiri City, Hotel Zone-1,<br>
        Naypyitaw, Myanmar<br>
        Tel: +95 67 422047<br>
             </td>
             <td>
        <b>Man Myanmar Hotel</b><br>
        No. 7, Datkhina Thiri City, Hotel Zone-1,  <br>
        Naypyitaw, Myanmar<br>
        Tel: +95 67 422130<br>
             </td>
        </tr>
        <tr>
             <td>
        <b>Golden Guest Hotel</b><br>
        No. 5, Datkhina Thiri City, Hotel Zone-1, <br>
        Naypyitaw, Myanmar<br>
        Tel: +95 67 414161<br>
             </td>
             <td>
        <b>Myat Nan Yon Hotel</b><br>
        
             </td>
        </tr>
        <tr>
             <td>
        <b>Hotel Max Naypyitaw</b><br>
        
             </td>
             <td>
        <b>Thingaha Hotel</b><br>
        Datkhina Thiri City, Hotel Zone-1,  <br>
        Naypyitaw, Myanmar<br>
        Tel: +95 67 414121
             </td>
        </tr>
        </tbody>
        </table>',
        'status' =>'active', 'url' =>'', 'title' =>'TRAVEL ACCOMMODATION', 'post_order' =>1, 'pages_id' =>23, 'created_by' =>'1', 'updated_by' =>'1', 'created_at' =>'2017-01-30 09:19:53', 'updated_at' =>'2017-01-30 09:19:53' ],
       
       
    );

    DB::table('posts')->insert($objs);
}
}