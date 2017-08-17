@extends('layouts.master_frontend')
@section('title','Registration Cancellation')
@section('content')
@include('layouts.partial.nav_registration')

        <!-- Content Column -->
        <div class="col-md-9">
            
            @if(isset($page->content) && $page->content !== "")
            {!! $page->content !!}
            <br>
            @endif
            @foreach($posts as $post)
                {!! $post->content !!}<br>
            @endforeach

        </div>
    </div>
    <!-- /.row -->
</div>

@stop
@section('page_script')
@endsection
