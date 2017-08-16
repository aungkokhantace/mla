
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <section class="head-top">
       <div class="container">
        <div class="row">
            <div class="col-md-9">
            <img src="images/head1.jpg" class="img-responsive">
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="SEARCH">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html" class="active">HOME</a>
                    </li>
                    <li>
                        <a href="program_topic.html">PROGRAM</a>
                    </li>
                    <li>
                        <a href="conference_registration_form.html">REGISTRATION</a>
                    </li>
                    <li>
                        <a href="sponsor_supporter.html">EXHIBITION & SPONSORSHIP</a>
                    </li>
                    <li>
                        <a href="post_conference_travel.html">TRAVEL & ACCOMMODATION</a>
                    </li>
                    <li>
                        <a href="gallery.html">GALLERY</a>
                    </li>
                    <li>
                        <a href="contact.html">CONTACT US</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header class="my-carousel">
                <img src="images/slide1.jpg" class="img-responsive">
    </header>



    <!-- Page Content -->
    <div class="container">

        <div class="row paper">
        <div class="col-md-3">
                <div class="list-group">
                    <a href="index.html" class="list-group-item">Program Topics</a>
                    <a href="convening.html#convening" class="list-group-item">Pre-conference Convencing</a>
                    <a href="conference_program_overview.html#conference" class="list-group-item">Conference Program Overview</a>
                    <a href="call_for_paper.html#paper" class="list-group-item active-sub">Call for Papers</a>
                    <a href="poster.html#poster" class="list-group-item">Poster Sessions</a>
                    <a href="guideline.html#guideline" class="list-group-item">Guideline for the Authors and Presenters</a>
                    <a href="library_culture_visit.html#library" class="list-group-item">Library and Culture visit</a>
                </div>
            </div>
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
            </div>
        </div>
        <!-- /.row -->
    </div>
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>copyright&copy;consalxvii</p>
                </div>
                <div class="col-lg-6" style="text-align:right;padding-top:20px;">
                    <i class="fa fa-facebook"></i>&nbsp;&nbsp;<i class="fa fa-twitter"></i>
                </div>
            </div>
        </div>
        </footer>

  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
