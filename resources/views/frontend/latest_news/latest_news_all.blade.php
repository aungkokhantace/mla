@extends('layouts.master_frontend')
@section('title','All Latest News')    
@section('content')
@include('layouts.partial.nav_news')

    <!-- Page Content -->
    <div class="container">
        <div class="col-md-9">
        <h2>NEWS</h2>    
            <section>
                @if(isset($latestNews) && count($latestNews)>0)
                    @foreach($latestNews as $latest_new)
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{$latest_new->image}}" class="img-responsive list-view-img">
                        </div>
                        <div class="col-md-9">
                            <h4 class="news-all-title"><a href="/news_detail/{{$latest_new->id}}">{{$latest_new->name}}</a></h4>
                            <p>{{$latest_new->short_description}}</a></p>
                            <a href="/news_detail/{{$latest_new->id}}" class="more">MORE>></a>
                        </div>
                    </div>
                    <br>
                    @endforeach
                    {!! $latestNews->render() !!}                    
                @endif
            </section>
        </div>
    </div>  
</div>
</div>

@stop
@section('page_script')
@endsection
