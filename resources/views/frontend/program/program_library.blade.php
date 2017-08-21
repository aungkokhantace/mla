@extends('layouts.master_frontend')
@section('title','Program Library')
@section('content')
@include('layouts.partial.nav_program')

              <!-- Content Column -->
              <div class="col-md-9">
                <h2>PROGRAM >> LIBRARY AND CULTURAL VISITS</h2>
                <br/>
                <div class="row">

                    @if(isset($programLibraries) && count($programLibraries)>0 )
                        @foreach($programLibraries as $programLibrary)                            

                            <div class="col-md-3">
                                <img src="{!! $programLibrary->image !!}">
                                <span>H{!! $programLibrary->name !!}lutaw</span>
                            </div>

                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

@stop
@section('page_script')
@endsection
