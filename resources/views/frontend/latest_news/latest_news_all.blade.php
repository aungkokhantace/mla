@extends('layouts.master_frontend')
@section('title','All Latest News')    
@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- <div class="row gallery"> -->
        <!-- <div class="col-md-9 col-sm-12 col-xs-12 gallery" id="gallery"> -->
           <!-- <div class="col-md-12"> -->
        <div class="row">
            <h2 class="gallery">ALL LATEST NEWS</h2>
            <section>
                @if(isset($latestNews) && count($latestNews)>0)
                <table class="table table-striped list-table" id="list-table">
                    <thead>
                    <tr>
                        <th width="20%">Name</th>
                        <th width="50%">Description</th>
                        <th width="30%">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($latestNews as $latest_new)
                        <tr>
                            <td><a href="/latest_news_detail/{{$latest_new->id}}">{{$latest_new->name}}</a></td>
                            <td>{{$latest_new->short_description}}<a href="/latest_news_detail/{{$latest_new->id}}" class="more">  more>></a></td>
                            <td><img src="{{$latest_new->image}}" class="img-responsive list-view-img"></td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
                @endif
            </section>
        </div>
    </div>  
</div>
</div>

@stop
@section('page_script')
@endsection
