@extends('layouts.master_frontend')
@section('title','Dashboard')
@section('content')


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8 home-left">

            <!-- First Blog Post -->
            <h2>
                CONSAL Information
            </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
            <p class="date"><i class="fa fa-calendar"></i> May 2-5,2018&nbsp;&nbsp;&nbsp;&nbsp;Naypyitaw,Myanmar</p>
            <br/>
            <img src="./assets/frontend/images/date.jpg" class="img-responsive">
            <br/>
            <h2>
                Greeting From National Organizing Committee
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
            <a class="btn btn-success btn-custom" href="#">Read More</a>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">


            <!-- Blog Categories Well -->
            <div class="home-right">
                <h2>
                Latest News and Events
                </h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row panel-body">  
                            <img src="/assets/frontend/images/left1.jpg">                              
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="more">more>></a>
                        </div>
                        <div class="row panel-body">  
                            <img src="/assets/frontend/images/left2.jpg">                              
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="more">more>></a>
                        </div>
                        <div class="row panel-body">  
                            <img src="/assets/frontend/images/left3.jpg">                              
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="more">more>></a>
                        </div>
                        <div class="row panel-body">  
                            <img src="/assets/frontend/images/left4.jpg">                              
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="more">more>></a>
                        </div>
                        <div class="row panel-body">  
                            <img src="/assets/frontend/images/left5.jpg">                              
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="more">more>></a>
                        </div>
                    </div>
                    
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>


        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<br/><hr>
<div class="container">
    <div class="row home-bottom">
            <div class="col-lg-12">
            <h2>They've Exhibited</h2> 
        </div>
        <div class="col-md-6 col-lg-6">
            <h3>Platinum Package</h3>
            <hr>
            <img style="margin-bottom:30px;" src="/assets/frontend/images/bottom1.jpg">
        </div>  
            <div class="col-md-6 col-lg-6">
            <h3>Gold Package</h3>
            <hr>
            <img style="margin-bottom:30px;" src="/assets/frontend/images/bottom2.jpg">
        </div> 

            <div class="col-md-6 col-lg-6">
            <h3>Silver Package</h3>
            <hr>
            <img src="/assets/frontend/images/bottom3.jpg">
        </div> 
            <div class="col-md-6">
            <h3>Bronze Package</h3>
            <hr>
            <img src="/assets/frontend/images/bottom4.jpg">
        </div> 
    </div>
    <!-- Footer -->
    </div>

    
@stop
@section('page_script')
@endsection
