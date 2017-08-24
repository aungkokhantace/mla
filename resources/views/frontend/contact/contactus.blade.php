@extends('layouts.master_frontend')
@section('title','Contact Us')
@section('content')
 <!-- Page Content -->
 <div class="container"> 
    <div class="row">
        @if(isset($posts) && count($posts)>0 )
            @foreach($posts as $post)
                {!! $post->content !!}<br>
            @endforeach
        @endif
     </div>
</div>

@stop
@section('page_script')
@endsection
