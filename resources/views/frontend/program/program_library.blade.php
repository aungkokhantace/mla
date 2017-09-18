@extends('layouts.master_frontend')
@section('title','Program Library')
@section('content')
@include('layouts.partial.nav_program')

              <!-- Content Column -->
              <div class="col-md-9">
                <h2>PROGRAM >> LIBRARY AND CULTURAL VISITS</h2>
                
                @if(isset($page->content) && $page->content !== "")
                {!! $page->content !!}
                <br>
                @endif
                @foreach($posts as $post)
                    {!! $post->content !!}<br>
                @endforeach

                <!-- <div class="row"> -->
                    @if(isset($programLibraries) && count($programLibraries)>0 )
                        @foreach($programLibraries as $programLibrary)                            
<!-- 
                            <div class="col-md-3">
                                <img src="{!! $programLibrary->image !!}">
                                <span>{!! $programLibrary->name !!}</span>
                            </div> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <b>{!! $programLibrary->name !!}</b><br>
                                    <img src="{!! $programLibrary->image !!}" class="img-responsive">
                                    {{$programLibrary->description}}
                                </div>
                            </div><br>
                        @endforeach
                    @endif
                <!-- </div> -->
            </div>
        </div>
        <!-- /.row -->
    </div>

@stop
@section('page_script')
@endsection
