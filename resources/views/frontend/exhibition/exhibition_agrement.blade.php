@extends('layouts.master_frontend')
@section('title','Exhibition Agreement')
@section('content')
@include('layouts.partial.nav_exhibition')

        <!-- Content Column -->
        <div class="col-md-9 col-sm-12 col-xs-12 exhibit" id="agreement">

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
