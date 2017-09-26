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
                @if(isset($exhibitorGroup) && count($exhibitorGroup) > 0)
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                    <h3>{{$key}}</h3>
                    <hr>
                    @if($key == "Platinum Package")
                        <img class="default-sponsor-image" src="assets/frontend/images/bottom1.jpg">
                    @endif
                    @foreach($exhibitorGroup as $exhibitor)
                        <img class="sponsor-logo-frontend" src="{{$exhibitor->image}}">
                    @endforeach
                    </div>
                </div>
                @endif 
            @endforeach
           <br> 

        </div>
    </div>
    <!-- /.row -->
</div>

@stop
@section('page_script')
@endsection
