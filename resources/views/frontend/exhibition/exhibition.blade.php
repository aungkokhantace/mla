@extends('layouts.master_frontend')
@section('title','Program Title')
@section('content')
@include('layouts.partial.nav_exhibition')

        <!-- Content Column -->
        <div class="col-md-9 col-sm-12 col-xs-12 sponsor" id="sponsor_support">
                       
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
