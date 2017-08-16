
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

        <div class="row">
        <div class="col-md-3">
                <div class="list-group">
                    <a href="conference_reg_form.html#conference_reg_form" class="list-group-item active-sub">Conference Registration Form</a>
                    <a href="registration_fee_payment.html#reg_fee_payment" class="list-group-item">Registration Fees and Payment</a>
                    <a href="cancellations.html#cancellations" class="list-group-item">Cancellations</a>
                    <a href="letter_invitation.html#invitation" class="list-group-item">Letter of Invitation</a>
                    <a href="poster.html#poster" class="list-group-item">visa Requirement</a>
                </div>
            </div>
            <div class="col-md-9 reg_fee_payment">
             <h2>PROGRAM >> CONFERENCE REGISTRATION FORM</h2>
             <form class="form-horizontal">
                <fieldset>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">First Name</label>  
                  <div class="col-md-4">
                  <input id="first_name" name="first_name" type="text" placeholder="" class="form-control input-md">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Middle Name</label>  
                  <div class="col-md-4">
                  <input id="middle_name" name="middle_name" type="text" placeholder="" class="form-control input-md">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Last Name</label>  
                  <div class="col-md-4">
                  <input id="last_name" name="last_name" type="text" placeholder="" class="form-control input-md">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Organization</label>  
                  <div class="col-md-4">
                  <input id="organization" name="organization" type="text" placeholder="" class="form-control input-md">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" type="email" placeholder="" class="form-control input-md">
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Country</label>
                  <div class="col-md-4">
                    <select id="country" name="country" class="form-control select_custom">
                      <option value="1">Option one</option>
                      <option value="2">Option two</option>
                    </select>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Phone No</label>  
                  <div class="col-md-4">
                  <input id="phone_no" name="phone_no" type="text" placeholder="" class="form-control input-md">
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Registration Category</label>
                  <div class="col-md-4">
                    <select id="reg_category" name="reg_category" class="form-control">
                      <option value="1">Option one</option>
                      <option value="2">Option two</option>
                    </select>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Payment Type</label>
                  <div class="col-md-4">
                    <select id="payment_type" name="payment_type" class="form-control">
                      <option value="1">Option one</option>
                      <option value="2">Option two</option>
                    </select>
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
                <br/> 
                <h2>Bank Account Information</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
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
