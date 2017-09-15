@extends('layouts.master_frontend')
@section('title','Test')
@section('content')
@include('layouts.partial.nav_program')

        <!-- Content Column -->
        <div class="col-md-9">
            @foreach($tests as $test)
                {!! $test->content !!}<br><br>
            @endforeach

        </div>
    </div>
    <!-- /.row -->
</div>

@stop
@section('page_script')
@endsection
