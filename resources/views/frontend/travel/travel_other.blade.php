@extends('layouts.master_frontend')
@section('title','Post Conference Travel')
@section('content')
@include('layouts.partial.nav_travel')

        <div class="col-md-9 poster" id="poster">
             <h2 style="margin-bottom:15px;">TRAVEL & ACCOMMODATIONS >> POST-CONFERENCE TRAVEL (OTHER DESTINATIONS)</h2>
                <!-- <div class="row"> -->
                  <!-- <div class="col-md-9"> -->
                    @if(isset($page->content) && $page->content !== "")
                    {!! $page->content !!}
                    <br>
                    @endif
                    @foreach($posts as $post)
                        {!! $post->content !!}<br>
                    @endforeach
                  <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
        <!-- /.row -->
    </div>

@stop
@section('page_script')
@endsection
