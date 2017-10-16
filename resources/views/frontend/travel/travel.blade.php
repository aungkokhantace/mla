@extends('layouts.master_frontend')
@section('title','Post Conference Travel')
@section('content')
@include('layouts.partial.nav_travel')

        <div class="col-md-9 poster" id="poster">
             <h2 style="margin-bottom:15px;">TRAVEL & ACCOMMODATIONS >> POST-CONFERENCE TRAVEL</h2>
                <div class="row">                
                    @if(isset($postConferenceTravels) && count($postConferenceTravels)>0 )            
                        @foreach($postConferenceTravels as $postConferenceTravel)                        
                        <!-- <div class="row"> -->
                            <div class="col-md-12">
                                <p><b>{!! $postConferenceTravel->name !!}</b></p>
                                @if(isset($postConferenceTravel->image) && $postConferenceTravel->image !== null)
                                <img src="{!! $postConferenceTravel->image !!}" class="img-responsive">
                                @endif
                                <p>{{$postConferenceTravel->description}}</p>
                            </div>
                        <!-- </div> -->
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
