@extends('layouts.master_frontend')
@section('title','Program Title')
@section('content')
@include('layouts.partial.nav_exhibition')

        <!-- Content Column -->
        <div class="col-md-9 col-sm-12 col-xs-12 sponsor" id="sponsor_support">
                       
            <!-- @if(isset($page->content) && $page->content !== "")
            {!! $page->content !!}
            <br>
            @endif
            @foreach($posts as $post)
                {!! $post->content !!}<br>
            @endforeach -->

            <h2>EXHIBITION &amp; SPONSORSHIP &gt;&gt; SPONSORS AND SUPPORTERS </h2>
                @foreach($exhibitorArray as $key=>$exhibitorGroup)
                    @if($key == "Platinum Package")
                        <!-- Display four logos as default -->
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h3>{{$key}}</h3>
                                <hr>
                                <!-- <img class="default-sponsor-image" src="assets/frontend/images/bottom1.jpg"> -->
                                <img class="sponsor-logo-frontend" src="assets/frontend/images/Logo_1.png">
                                <img class="sponsor-logo-frontend" src="assets/frontend/images/Logo_2.png">
                                <img class="sponsor-logo-frontend" src="assets/frontend/images/Logo_3.png">
                                <img class="sponsor-logo-frontend" src="assets/frontend/images/Logo_4.png">

                                <!-- append logos from database -->
                                @foreach($exhibitorGroup as $exhibitor)
                                    <img class="sponsor-logo-frontend" src="{{$exhibitor->image}}">
                                @endforeach
                            </div>
                        </div>

                    <!-- Display other packages as normal -->
                    @else
                        @if(isset($exhibitorGroup) && count($exhibitorGroup) > 0)
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h3>{{$key}}</h3>
                                <hr>
                                
                                @foreach($exhibitorGroup as $exhibitor)
                                    <img class="sponsor-logo-frontend" src="{{$exhibitor->image}}">
                                @endforeach
                            </div>
                        </div>
                        @endif
                    @endif

                    <!-- @if(isset($exhibitorGroup) && count($exhibitorGroup) > 0)
                    <div class="col-md-6 col-lg-6">
                        <h3>{{$key}}</h3>
                        <hr>
                        
                        @foreach($exhibitorGroup as $exhibitor)
                            <img class="sponsor-logo-frontend" src="{{$exhibitor->image}}">
                        @endforeach
                    </div>
                    @endif  -->
                @endforeach

                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3>Printing Package</h3>
                        <hr>
                        <img class="sponsor-logo-frontend" src="/ExhibitorImages/mcm_logo.jpg">
                    </div>
                </div>

               <!-- @foreach($exhibitorArray as $key=>$exhibitorGroup)
                    @if($key == "Platinum Package")
                        <img class="default-sponsor-image" src="assets/frontend/images/bottom1.jpg">
                    @endif
                    @if(isset($exhibitorGroup) && count($exhibitorGroup) > 0)
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                        <h3>{{$key}}</h3>
                        <hr>
                        
                        @foreach($exhibitorGroup as $exhibitor)
                            <img class="sponsor-logo-frontend" src="{{$exhibitor->image}}">
                        @endforeach
                        </div>
                    </div>
                    @endif 
                @endforeach -->
           <br> 

        </div>
    </div>
    <!-- /.row -->
</div>

@stop
@section('page_script')
@endsection
