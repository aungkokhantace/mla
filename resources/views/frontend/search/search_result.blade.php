@extends('layouts.master_frontend')
@section('title','Search Result')    
@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- <div class="row gallery"> -->
        <!-- <div class="col-md-9 col-sm-12 col-xs-12 gallery" id="gallery"> -->
           <!-- <div class="col-md-12"> -->
        <div class="row">
            <h2 class="gallery">SEARCH RESULTS</h2>
            <section>
                @if(isset($results) && count($results)>0)
                <table class="table table-striped list-table" id="list-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $result)
                        <tr>
                            <td>{{$result->name}}</td>
                            <td><a href="/{{$result->page->url}}" class="more">  Read More>></a></td>
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
