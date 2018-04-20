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

                  <!-- Start Displaying Local Business Package     -->
                  @elseif($key == "Local Business Package")
                      <!-- Display four logos as default -->
                      <div class="col-md-12 col-lg-12">
                          <h3>{{$key}}</h3>
                          <hr>
                          <img class="sponsor-logo-frontend-large" src="/ExhibitorImages/mbc_logo.jpg">
                          <!-- <img class="sponsor-logo-frontend" src="/ExhibitorImages/lion.jpg"> -->

                          <!-- append logos from database -->
                          @foreach($exhibitorGroup as $exhibitor)
                              <img class="sponsor-logo-frontend-large" src="{{$exhibitor->image}}">
                          @endforeach
                      </div>
                    <!-- End Displaying Local Business Package     -->

                    <!-- Start Displaying Bronze Package  -->
                    @elseif($key == "Bronze Package")
                        <!-- Display four logos as default -->
                        <div class="col-md-12 col-lg-12">
                            <h3>{{$key}}</h3>
                            <hr>
                            <!-- <img class="sponsor-logo-frontend-large" src="/ExhibitorImages/yoma-bank-logo-mm.jpg"> -->
                            <img class="sponsor-logo-frontend-large" src="/ExhibitorImages/yoma-bank-logo-eng.jpg">

                            <!-- append logos from database -->
                            @foreach($exhibitorGroup as $exhibitor)
                                <img class="sponsor-logo-frontend-large" src="{{$exhibitor->image}}">
                            @endforeach
                        </div>
                    <!-- End Displaying Bronze Package  -->

                    <!-- Display other packages as normal -->
                    @else
                        @if(isset($exhibitorGroup) && count($exhibitorGroup) > 0)
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h3>{{$key}}</h3>
                                <hr>

                                @foreach($exhibitorGroup as $exhibitor)
                                    <!-- <img class="sponsor-logo-frontend" src="{{$exhibitor->image}}"> -->
                                    <img class="sponsor-logo-frontend-large" src="{{$exhibitor->image}}">
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

                <!-- <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3>Local Business Package</h3>
                        <hr>
                        <img class="sponsor-logo-frontend-large" src="/ExhibitorImages/mbc_logo.jpg">
                        <img class="sponsor-logo-frontend" src="/ExhibitorImages/lion.jpg">
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3>Coffee and Tea Sponsor</h3>
                        <hr>
                        <!-- <img class="sponsor-logo-frontend" src="/ExhibitorImages/MargaYouthFoundation.jpg"> -->
                        <img class="sponsor-logo-frontend" src="/ExhibitorImages/marga.jpg">
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

                <!-- Bronze package -->
                <!-- <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3>Bronze Package</h3>
                        <hr> -->
                        <!-- <img class="sponsor-logo-frontend" src="/ExhibitorImages/yoma-bank-logo-mm.jpg"> -->
                        <!-- <img class="sponsor-logo-frontend" src="/ExhibitorImages/yoma-bank-logo-eng.jpg">
                    </div>
                </div> -->
                <!-- Bronze package -->
           <br>

        </div>
    </div>
    <!-- /.row -->
</div>

@stop
@section('page_script')
@endsection
