@extends('layouts.master_frontend')
@section('title','Gallery')    
@section('content')
@include('layouts.partial.nav_gallery')
    <!-- Page Content -->
    <!-- <div class="container"> -->

        <!-- <div class="row gallery"> -->
        <div class="col-md-9 col-sm-12 col-xs-12 gallery" id="gallery">
           <!-- <div class="col-md-12"> -->
            <div class="row">
                <h2 class="gallery">GALLERY</h2>
                <section>
                    <ul class="lb-album">
                        @if(isset($images) && count($images)>0)
                        @foreach($images as $image)

                            <li>
                                <a href="#{!! $image->path !!}">
                                    <img width="210px;" height="180px;" src="{!! $image->path !!}" alt="{!! $image->path !!}">
                                    
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
