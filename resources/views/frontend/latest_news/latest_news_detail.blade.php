@extends('layouts.master_frontend')
@section('title','Latest News Detail')    
@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- <div class="row gallery"> -->
        <!-- <div class="col-md-9 col-sm-12 col-xs-12 gallery" id="gallery"> -->
           <!-- <div class="col-md-12"> -->
        <div class="row">
            <h2 class="gallery">LATEST NEWS DETAIL</h2>
            <section>
                @if(isset($latestNews) && count($latestNews)>0)
                    <h3><u>{{$latestNews->name}}</u></h3>    <br>
                    @if(isset($latestNews->image) && count($latestNews->image)>0)
                        <img src="{{$latestNews->image}}" class="list-view-img"> <br><br> 
                    @endif
                    <p>{{$latestNews->description}}</p>
                @endif
            </section>
        </div>
    </div>  
</div>
</div>

@stop
@section('page_script')
@endsection
