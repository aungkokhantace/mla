@extends('layouts.master_frontend')
@section('title','Gallery')
@section('content')

        <!-- Page Content -->
    <div class="container">

        <div class="row">
           <div class="col-md-12">
            
            <div class="row">
                <h2 class="gallery">Gallery</h2>
            <section>
                <ul class="lb-album">
                    
                    @if(isset($images) && count($images)>0)
                        @foreach($images as $image)

                            <li>
                                <a href="#{!! $image->path !!}">
                                    <img width="230px;" height="180px;" src="{!! $image->path !!}" alt="{!! $image->path !!}">
                                    
                                </a>
                                <div class="lb-overlay" id="{!! $image->path !!}">
                                    <img src="{!! $image->path !!}" alt="{!! $image->path !!}" />
                                    
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>       

                        @endforeach
                    @endif

                </ul>
            </section>
            </div>
           </div>
        </div>
        <!-- /.row -->
    </div>

@stop
@section('page_script')
@endsection
