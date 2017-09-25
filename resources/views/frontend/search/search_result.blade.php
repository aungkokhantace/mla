@extends('layouts.master_frontend')
@section('title','Search Result')    
@section('content')
@include('layouts.partial.nav_search_result')

    <!-- Page Content -->
    <div class="container">
        <div class="col-md-9">
        <h2>SEARCH RESULTS</h2>    
            <section>
                @if(isset($results) && count($results) > 0)
                    @foreach($results as $result)
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="news-all-title"><a href="/{{$result->page->url}}">{{$result->name}}</a></h4>
                            @if(isset($result->content) && count($result->content) > 0)
                                {!!$result->content!!}
                            @endif
                            <br><a href="/{{$result->page->url}}" class="more">MORE>></a>
                        </div>
                    </div>
                    <br>
                    @endforeach
                @endif
            </section>
        </div>
    </div>  
</div>
</div>
@stop
@section('page_script')
@endsection
