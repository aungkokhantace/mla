@extends('layouts.master_frontend')
@section('title','Travel Accommodation')
@section('content')
@include('layouts.partial.nav_travel')

            <div class="col-md-9 poster" id="accommodation">
            <!-- <h2>TRAVEL & ACCOMMODATIONS >> ACCOMMODATIONS</h2> -->
            
            @if(isset($page->content) && $page->content !== "")
            {!! $page->content !!}
            <br>
            @endif
            @foreach($posts as $post)
                {!! $post->content !!}<br>
            @endforeach

             @if(isset($accommos) && count($accommos)>0 )
                @foreach($accommos as $accommo)
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{!! $accommo->image !!}" class="img-responsive">
                        </div>
                        <div class="col-md-9">
                            <h4 style="margin-top:-3px;">{!! $accommo->name !!}</h4>
                            <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star" style="margin-bottom:10px;"></span>
                            <br/>
                            <p>
                                {!! $accommo->description !!}
                            </p>
                        </div>
                    </div>
                
                @endforeach
            @endif

            </div>
        </div>
        <!-- /.row -->
    </div>
@stop
@section('page_script')
@endsection
