@extends('layouts.master_frontend')
@section('title','Contact Us')
@section('content')
 <!-- Page Content -->
 <div class="container">
 
         <div class="row contact">
            @if(isset($page->content) && $page->content !== "")
            {!! $page->content !!}
            <br>
            @endif
            @foreach($posts as $post)
                {!! $post->content !!}<br>
            @endforeach
         </div>
         <!-- /.row -->
     </div>
@stop
@section('page_script')
@endsection
