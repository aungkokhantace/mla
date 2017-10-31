@extends('layouts.master_frontend')
@section('title','All Latest News')    
@section('content')
@include('layouts.partial.nav_news')

    <!-- Page Content -->
    <div class="container">
        <div class="col-md-9">
        <!-- <h2>NEWS</h2>     -->
            <section>
                @if(isset($latestNews) && count($latestNews)>0)
                    <h4 class="news-detail-title"><b>{{$latestNews->name}}</b></h4>
                    <img src="{{$latestNews->image}}" class="img-responsive">
                    <p class="news-detail-description">{{$latestNews->description}}</p>
                    <p class="news_date">{{$latestNews->formatted_date}}</p>
                @endif
            </section>
        </div>
    </div>  
</div>
</div>

@stop
@section('page_script')
@endsection
