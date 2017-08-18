@extends('layouts.master_frontend')
@section('title','Dashboard')
@section('content')


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8 home-left">

            <!-- First Blog Post -->
            
            @if(isset($page->content) && $page->content !== "")
            {!! $page->content !!}
            <br>
            @endif
            @foreach($posts as $post)
                {!! $post->content !!}<br>
            @endforeach
            
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

                        @if(isset($latestNews) && count($latestNews)>0)
                            @foreach($latestNews as $latestNew)
                                
                                <div class="row panel-body">  
                                    <img class="img_latest_new" src="{!! $latestNew->image !!}">                              
                                    <p>{!! $latestNew->description !!}</p>
                                    <a href="#" class="more">more>></a>
                                </div>

                            @endforeach
                        @endif
                       
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