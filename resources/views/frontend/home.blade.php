@extends('layouts.master_frontend')
@section('title','Dashboard')
@section('content')

<!-- Header Carousel -->
<header class="my-carousel">
    <img src="/assets/frontend/images/consal_slider.jpg" class="img-responsive">
</header>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <marquee><b>"Next Generation Libraries: Collaborate and Connect"</b></marquee>
    </div>
    <div class="row">
        <input type="hidden" name="countDownDate" id="countDownDate" value="{{$countDownDate}}">
        <!-- Blog Entries Column -->
        <div class="col-md-8 home-left">

            <!-- First Blog Post -->
            <!-- <div class="row">
                <div class="col-md-12 timer-align">
                    <div class="col-md-2 count_down" id="days">DAYS</div>
                    <div class="col-md-2 count_down" id="hours">HOURS</div>
                    <div class="col-md-2 count_down" id="minutes">MINUTES</div>
                    <div class="col-md-2 count_down" id="seconds">SECONDS</div>
                </div>
            </div> -->

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
                LATEST NEWS AND EVENTS
                </h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(isset($latestNews) && count($latestNews)>0)
                            @foreach($latestNews as $latestNew)                                
                            <div class="row panel-body">  
                                <img class="img_latest_new" src="{!! $latestNew->image !!}">                              
                                <h5><b>{!! $latestNew->name !!}</b></h5>
                                <p>{!! $latestNew->short_description !!}  <a href="/latest_news_detail/{{$latestNew->id}}" class="more">more>></a></p>
                            </div>
                            @endforeach
                            <br>
                            <a href="/latest_news_all" class="more">ALL LATEST NEWS>></a>
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
<script>
// Set the date we're counting down to
// var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();

var countDownDateRaw    = document.getElementById("countDownDate").value;
var countDownDate       = new Date(countDownDateRaw).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("days").innerHTML = '<span class="counter_value">' + days + '</span>' + '<br><span class="counter_unit"> DAYS</span>';
    document.getElementById("hours").innerHTML = '<span class="counter_value">' + hours + '</span>' + '<br><span class="counter_unit">HOURS</span>';
    document.getElementById("minutes").innerHTML = '<span class="counter_value">' + minutes + '</span>' + '<br><span class="counter_unit">MINUTES</span>';
    document.getElementById("seconds").innerHTML = '<span class="counter_value">' + seconds + '</span>' + '<br><span class="counter_unit">SECONDS</span>';
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

<script>
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 414;  // How many characters are shown by default
    // var ellipsestext = "...";
    var ellipsestext = "";
    var moretext = "Show more>>";
    var lesstext = "Show less<<";
    

    $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
            //to replace all occurrence of </p> and <p>
            var h = h.replace(new RegExp('</p>', 'g'), '</span></span></p>');
            var h = h.replace(new RegExp('<p>', 'g'), '<p><span class="morecontent"><span>');
            
            var html = c + '<span class="moreellipses">' + ellipsestext+ '</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';
           
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        // var x = document.getElementsByClassName("morecontent");
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } 
        else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }

        $(".morecontent").toggle();

        return false;
    });
});
</script>

@endsection