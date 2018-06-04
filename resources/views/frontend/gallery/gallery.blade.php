@extends('layouts.master_frontend')
@section('title','Gallery')
@section('content')
@include('layouts.partial.nav_gallery')
    <!-- Page Content -->
    <!-- <div class="container"> -->

        <!-- <div class="row gallery"> -->
        <!-- <div class="col-md-9 col-sm-12 col-xs-12 gallery" id="gallery"> -->
        <div class="col-md-9">
           <!-- <div class="col-md-12"> -->
            <!-- <div class="row"> -->
                <h2>GALLERY</h2>

                <!-- start audio -->
                <section>
                    <audio controls>
                      <source src="galleryImages/ASEAN Library[Mastered].mp3" type="audio/mpeg">
                    </audio>
                </section>
                <!-- end audio -->

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
                    <!--add new img-->
                            <li>
                                <a href="#/galleryImages/NSK_5299.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5299.JPG" alt="/galleryImages/NSK_5299.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5299.JPG">
                                    <img src="galleryImages/NSK_5299.JPG" alt="/galleryImages/NSK_5299.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5300.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5300.JPG" alt="/galleryImages/NSK_5300.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5300.JPG">
                                    <img src="galleryImages/NSK_5300.JPG" alt="/galleryImages/NSK_5300.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5318.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5318.JPG" alt="/galleryImages/NSK_5318.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5318.JPG">
                                    <img src="galleryImages/NSK_5318.JPG" alt="/galleryImages/NSK_5318.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5325.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5325.JPG" alt="/galleryImages/NSK_5325.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5325.JPG">
                                    <img src="galleryImages/NSK_5325.JPG" alt="/galleryImages/NSK_5325.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5327.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5327.JPG" alt="/galleryImages/NSK_5327.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5327.JPG">
                                    <img src="galleryImages/NSK_5327.JPG" alt="/galleryImages/NSK_5327.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5336.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5336.JPG" alt="/galleryImages/NSK_5336.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5336.JPG">
                                    <img src="galleryImages/NSK_5336.JPG" alt="/galleryImages/NSK_5336.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5337.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5337.JPG" alt="/galleryImages/NSK_5337.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5337.JPG">
                                    <img src="galleryImages/NSK_5337.JPG" alt="/galleryImages/NSK_5337.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5340.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5340.JPG" alt="/galleryImages/NSK_5340.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5340.JPG">
                                    <img src="galleryImages/NSK_5340.JPG" alt="/galleryImages/NSK_5340.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5341.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5341.JPG" alt="/galleryImages/NSK_5341.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5341.JPG">
                                    <img src="galleryImages/NSK_5341.JPG" alt="/galleryImages/NSK_5341.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5342.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5342.JPG" alt="/galleryImages/NSK_5342.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5342.JPG">
                                    <img src="galleryImages/NSK_5342.JPG" alt="/galleryImages/NSK_5342.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5343.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5343.JPG" alt="/galleryImages/NSK_5343.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5343.JPG">
                                    <img src="galleryImages/NSK_5343.JPG" alt="/galleryImages/NSK_5343.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5344.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5344.JPG" alt="/galleryImages/NSK_5344.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5344.JPG">
                                    <img src="galleryImages/NSK_5344.JPG" alt="/galleryImages/NSK_5344.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5345.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5345.JPG" alt="/galleryImages/NSK_5345.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5345.JPG">
                                    <img src="galleryImages/NSK_5345.JPG" alt="/galleryImages/NSK_5345.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5346.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5346.JPG" alt="/galleryImages/NSK_5346.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5346.JPG">
                                    <img src="galleryImages/NSK_5346.JPG" alt="/galleryImages/NSK_5346.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5349.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5349.JPG" alt="/galleryImages/NSK_5349.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5349.JPG">
                                    <img src="galleryImages/NSK_5349.JPG" alt="/galleryImages/NSK_5349.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5350.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5350.JPG" alt="/galleryImages/NSK_5350.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5350.JPG">
                                    <img src="galleryImages/NSK_5350.JPG" alt="/galleryImages/NSK_5350.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5354.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5354.JPG" alt="/galleryImages/NSK_5354.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5354.JPG">
                                    <img src="galleryImages/NSK_5354.JPG" alt="/galleryImages/NSK_5354.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5355.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5355.JPG" alt="/galleryImages/NSK_5355.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5355.JPG">
                                    <img src="galleryImages/NSK_5355.JPG" alt="/galleryImages/NSK_5355.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5347.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5347.JPG" alt="/galleryImages/NSK_5347.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5347.JPG">
                                    <img src="galleryImages/NSK_5347.JPG" alt="/galleryImages/NSK_5347.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5371.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5371.JPG" alt="/galleryImages/NSK_5371.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5371.JPG">
                                    <img src="galleryImages/NSK_5371.JPG" alt="/galleryImages/NSK_5371.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5374.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5374.JPG" alt="/galleryImages/NSK_5374.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5374.JPG">
                                    <img src="galleryImages/NSK_5374.JPG" alt="/galleryImages/NSK_5374.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5378.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5378.JPG" alt="/galleryImages/NSK_5378.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5378.JPG">
                                    <img src="galleryImages/NSK_5378.JPG" alt="/galleryImages/NSK_5378.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5382.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5382.JPG" alt="/galleryImages/NSK_5382.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5382.JPG">
                                    <img src="galleryImages/NSK_5382.JPG" alt="/galleryImages/NSK_5382.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5387.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5387.JPG" alt="/galleryImages/NSK_5387.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5387.JPG">
                                    <img src="galleryImages/NSK_5387.JPG" alt="/galleryImages/NSK_5387.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5388.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5388.JPG" alt="/galleryImages/NSK_5388.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5388.JPG">
                                    <img src="galleryImages/NSK_5388.JPG" alt="/galleryImages/NSK_5388.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5389.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5389.JPG" alt="/galleryImages/NSK_5389.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5389.JPG">
                                    <img src="galleryImages/NSK_5389.JPG" alt="/galleryImages/NSK_5389.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5390.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5390.JPG" alt="/galleryImages/NSK_5390.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5390.JPG">
                                    <img src="galleryImages/NSK_5390.JPG" alt="/galleryImages/NSK_5390.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5391.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5391.JPG" alt="/galleryImages/NSK_5391.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5391.JPG">
                                    <img src="galleryImages/NSK_5391.JPG" alt="/galleryImages/NSK_5391.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5392.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5392.JPG" alt="/galleryImages/NSK_5392.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5392.JPG">
                                    <img src="galleryImages/NSK_5392.JPG" alt="/galleryImages/NSK_5392.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5394.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5394.JPG" alt="/galleryImages/NSK_5394.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5394.JPG">
                                    <img src="galleryImages/NSK_5394.JPG" alt="/galleryImages/NSK_5394.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5407.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5407.JPG" alt="/galleryImages/NSK_5407.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5407.JPG">
                                    <img src="galleryImages/NSK_5407.JPG" alt="/galleryImages/NSK_5407.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5408.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5408.JPG" alt="/galleryImages/NSK_5408.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5408.JPG">
                                    <img src="galleryImages/NSK_5408.JPG" alt="/galleryImages/NSK_5408.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5411.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5411.JPG" alt="/galleryImages/NSK_5411.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5411.JPG">
                                    <img src="galleryImages/NSK_5411.JPG" alt="/galleryImages/NSK_5411.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5435.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5435.JPG" alt="/galleryImages/NSK_5435.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5435.JPG">
                                    <img src="galleryImages/NSK_5435.JPG" alt="/galleryImages/NSK_5435.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5445.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5445.JPG" alt="/galleryImages/NSK_5445.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5445.JPG">
                                    <img src="galleryImages/NSK_5445.JPG" alt="/galleryImages/NSK_5445.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5457.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5457.JPG" alt="/galleryImages/NSK_5457.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5457.JPG">
                                    <img src="galleryImages/NSK_5457.JPG" alt="/galleryImages/NSK_5457.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5469.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5469.JPG" alt="/galleryImages/NSK_5469.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5469.JPG">
                                    <img src="galleryImages/NSK_5469.JPG" alt="/galleryImages/NSK_5469.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5475.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5475.JPG" alt="/galleryImages/NSK_5475.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5475.JPG">
                                    <img src="galleryImages/NSK_5475.JPG" alt="/galleryImages/NSK_5475.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5481.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5481.JPG" alt="/galleryImages/NSK_5481.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5481.JPG">
                                    <img src="galleryImages/NSK_5481.JPG" alt="/galleryImages/NSK_5481.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5509.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5509.JPG" alt="/galleryImages/NSK_5509.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5509.JPG">
                                    <img src="galleryImages/NSK_5509.JPG" alt="/galleryImages/NSK_5509.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5521.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5521.JPG" alt="/galleryImages/NSK_5521.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5521.JPG">
                                    <img src="galleryImages/NSK_5521.JPG" alt="/galleryImages/NSK_5521.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5528.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5528.JPG" alt="/galleryImages/NSK_5528.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5528.JPG">
                                    <img src="galleryImages/NSK_5528.JPG" alt="/galleryImages/NSK_5528.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5539.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5539.JPG" alt="/galleryImages/NSK_5539.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5539.JPG">
                                    <img src="galleryImages/NSK_5539.JPG" alt="/galleryImages/NSK_5539.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5562.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5562.JPG" alt="/galleryImages/NSK_5562.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5562.JPG">
                                    <img src="galleryImages/NSK_5562.JPG" alt="/galleryImages/NSK_5562.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5564.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5564.JPG" alt="/galleryImages/NSK_5564.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5564.JPG">
                                    <img src="galleryImages/NSK_5564.JPG" alt="/galleryImages/NSK_5564.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5567.JPG">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5567.JPG" alt="/galleryImages/NSK_5567.JPG">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5567.JPG">
                                    <img src="galleryImages/NSK_5567.JPG" alt="/galleryImages/NSK_5567.JPG" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <!-- end new image -->
                    </ul>
                </section>
            <!-- </div> -->
           </div>
        </div>
        <!-- /.row -->
    </div>

@stop
@section('page_script')
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
@endsection
