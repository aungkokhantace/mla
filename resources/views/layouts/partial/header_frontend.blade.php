<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>17th Congress of Southeast Asian Libraries</title>

    <!-- <link rel="stylesheet" type="text/css" href="/assets/frontend/css/demo.css" /> -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/style.css" />

    <link href="/assets/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/frontend/css/modern-business.css" rel="stylesheet">
    <link href="/assets/frontend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/frontend_custom/style_custom.css" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/sweetalert.css">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css">

    <!-- For image upload css -->
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/custom.css">
    <!-- <link media="all" type="text/css" rel="stylesheet" href="/assets/css/style.min.css"> -->
    <link media="all" type="text/css" rel="stylesheet" href="/assets/plugins/jasny/css/jasny-bootstrap.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">



</head>

<body>
    <section class="head-top">
       <div class="container">
        <div class="row">
            <div class="col-md-2 inner-header-logo">
                <a href="/home"><img src="/assets/frontend/images/consal_logo.png" class="img-responsive head-of-mla-photo"></a>
            </div>
            <div class="col-md-10 inner-header-text">
            <!-- <img src="/assets/frontend/images/header_logo.png" class="img-responsive head-of-mla-photo"> -->
                <span class="inner-header-text">
                    17th Congress of Southeast Asian Librarians <br>
                    2-5 May 2018 <br>
                    Naypyitaw, Myanmar
                </span>
            </div>
<!--
            {!! Form::open(array('url' => '/search','files'=>true, 'id'=>'search', 'class'=> 'form-horizontal user-form-border')) !!}
            <div class="col-md-3">
                <div class="input-group searchbox">
                <input type="text" class="form-control" name="search_term" id="search_term" placeholder="SEARCH" autocomplete="off">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
            {!! Form::close() !!} -->
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
                        @if(strpos(url()->current(),'/home') !== false)
                        <a href="/home" class="active">HOME</a>
                        @else
                        <a href="/home">HOME</a>
                        @endif
                    </li>
                    <li>
                        @if(strpos(url()->current(),'/program') !== false)
                        <a href="/program" class="active">PROGRAM</a>
                        @else
                        <a href="/program">PROGRAM</a>
                        @endif
                    </li>
                    <li>
                        @if(strpos(url()->current(),'/registration') !== false)
                        <a href="/registration" class="active">REGISTRATION</a>
                        @else
                        <a href="/registration">REGISTRATION</a>
                        @endif
                    </li>
                    <li>
                        @if(strpos(url()->current(),'/exhibition') !== false)
                        <a href="/exhibition" class="active">EXHIBITION & SPONSORSHIP</a>
                        @else
                        <a href="/exhibition">EXHIBITION & SPONSORSHIP</a>
                        @endif
                    </li>
                    <li>
                        @if(strpos(url()->current(),'/travel') !== false)
                        <a href="/travel" class="active">TRAVEL & ACCOMMODATION</a>
                        @else
                        <a href="/travel">TRAVEL & ACCOMMODATION</a>
                        @endif
                    </li>
                    <li>
                        @if(strpos(url()->current(),'/gallery') !== false)
                        <a href="/gallery" class="active">GALLERY</a>
                        @else
                        <a href="/gallery">GALLERY</a>
                        @endif
                    </li>
                    <li>
                        @if(strpos(url()->current(),'/contact') !== false)
                        <a href="/contact" class="active">CONTACT US</a>
                        @else
                        <a href="/contact">CONTACT US</a>
                        @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        {!! Form::open(array('url' => '/search','files'=>true, 'id'=>'search', 'class'=> 'form-horizontal user-form-border')) !!}
        <div class="input-group">
            <input type="text" class="form-control" placeholder="SEARCH" name="search_term" id="search_term" autocomplete="off">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </span>
        </div>
        {!! Form::close() !!}
    </nav>
