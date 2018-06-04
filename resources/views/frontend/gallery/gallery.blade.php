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
                                <a href="#/galleryImages/NSK_5299.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5299.jpg" alt="/galleryImages/NSK_5299.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5299.jpg">
                                    <img src="galleryImages/NSK_5299.jpg" alt="/galleryImages/NSK_5299.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5300.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5300.jpg" alt="/galleryImages/NSK_5300.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5300.jpg">
                                    <img src="galleryImages/NSK_5300.jpg" alt="/galleryImages/NSK_5300.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5318.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5318.jpg" alt="/galleryImages/NSK_5318.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5318.jpg">
                                    <img src="galleryImages/NSK_5318.jpg" alt="/galleryImages/NSK_5318.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5325.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5325.jpg" alt="/galleryImages/NSK_5325.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5325.jpg">
                                    <img src="galleryImages/NSK_5325.jpg" alt="/galleryImages/NSK_5325.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5327.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5327.jpg" alt="/galleryImages/NSK_5327.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5327.jpg">
                                    <img src="galleryImages/NSK_5327.jpg" alt="/galleryImages/NSK_5327.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5336.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5336.jpg" alt="/galleryImages/NSK_5336.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5336.jpg">
                                    <img src="galleryImages/NSK_5336.jpg" alt="/galleryImages/NSK_5336.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5337.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5337.jpg" alt="/galleryImages/NSK_5337.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5337.jpg">
                                    <img src="galleryImages/NSK_5337.jpg" alt="/galleryImages/NSK_5337.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5340.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5340.jpg" alt="/galleryImages/NSK_5340.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5340.jpg">
                                    <img src="galleryImages/NSK_5340.jpg" alt="/galleryImages/NSK_5340.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5341.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5341.jpg" alt="/galleryImages/NSK_5341.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5341.jpg">
                                    <img src="galleryImages/NSK_5341.jpg" alt="/galleryImages/NSK_5341.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5342.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5342.jpg" alt="/galleryImages/NSK_5342.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5342.jpg">
                                    <img src="galleryImages/NSK_5342.jpg" alt="/galleryImages/NSK_5342.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5343.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5343.jpg" alt="/galleryImages/NSK_5343.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5343.jpg">
                                    <img src="galleryImages/NSK_5343.jpg" alt="/galleryImages/NSK_5343.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5344.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5344.jpg" alt="/galleryImages/NSK_5344.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5344.jpg">
                                    <img src="galleryImages/NSK_5344.jpg" alt="/galleryImages/NSK_5344.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5345.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5345.jpg" alt="/galleryImages/NSK_5345.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5345.jpg">
                                    <img src="galleryImages/NSK_5345.jpg" alt="/galleryImages/NSK_5345.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5346.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5346.jpg" alt="/galleryImages/NSK_5346.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5346.jpg">
                                    <img src="galleryImages/NSK_5346.jpg" alt="/galleryImages/NSK_5346.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5349.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5349.jpg" alt="/galleryImages/NSK_5349.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5349.jpg">
                                    <img src="galleryImages/NSK_5349.jpg" alt="/galleryImages/NSK_5349.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5350.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5350.jpg" alt="/galleryImages/NSK_5350.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5350.jpg">
                                    <img src="galleryImages/NSK_5350.jpg" alt="/galleryImages/NSK_5350.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5354.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5354.jpg" alt="/galleryImages/NSK_5354.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5354.jpg">
                                    <img src="galleryImages/NSK_5354.jpg" alt="/galleryImages/NSK_5354.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5355.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5355.jpg" alt="/galleryImages/NSK_5355.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5355.jpg">
                                    <img src="galleryImages/NSK_5355.jpg" alt="/galleryImages/NSK_5355.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5347.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5347.jpg" alt="/galleryImages/NSK_5347.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5347.jpg">
                                    <img src="galleryImages/NSK_5347.jpg" alt="/galleryImages/NSK_5347.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5371.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5371.jpg" alt="/galleryImages/NSK_5371.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5371.jpg">
                                    <img src="galleryImages/NSK_5371.jpg" alt="/galleryImages/NSK_5371.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5374.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5374.jpg" alt="/galleryImages/NSK_5374.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5374.jpg">
                                    <img src="galleryImages/NSK_5374.jpg" alt="/galleryImages/NSK_5374.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5378.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5378.jpg" alt="/galleryImages/NSK_5378.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5378.jpg">
                                    <img src="galleryImages/NSK_5378.jpg" alt="/galleryImages/NSK_5378.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5382.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5382.jpg" alt="/galleryImages/NSK_5382.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5382.jpg">
                                    <img src="galleryImages/NSK_5382.jpg" alt="/galleryImages/NSK_5382.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5387.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5387.jpg" alt="/galleryImages/NSK_5387.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5387.jpg">
                                    <img src="galleryImages/NSK_5387.jpg" alt="/galleryImages/NSK_5387.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5388.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5388.jpg" alt="/galleryImages/NSK_5388.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5388.jpg">
                                    <img src="galleryImages/NSK_5388.jpg" alt="/galleryImages/NSK_5388.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5389.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5389.jpg" alt="/galleryImages/NSK_5389.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5389.jpg">
                                    <img src="galleryImages/NSK_5389.jpg" alt="/galleryImages/NSK_5389.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5390.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5390.jpg" alt="/galleryImages/NSK_5390.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5390.jpg">
                                    <img src="galleryImages/NSK_5390.jpg" alt="/galleryImages/NSK_5390.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5391.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5391.jpg" alt="/galleryImages/NSK_5391.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5391.jpg">
                                    <img src="galleryImages/NSK_5391.jpg" alt="/galleryImages/NSK_5391.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5392.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5392.jpg" alt="/galleryImages/NSK_5392.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5392.jpg">
                                    <img src="galleryImages/NSK_5392.jpg" alt="/galleryImages/NSK_5392.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5394.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5394.jpg" alt="/galleryImages/NSK_5394.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5394.jpg">
                                    <img src="galleryImages/NSK_5394.jpg" alt="/galleryImages/NSK_5394.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5407.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5407.jpg" alt="/galleryImages/NSK_5407.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5407.jpg">
                                    <img src="galleryImages/NSK_5407.jpg" alt="/galleryImages/NSK_5407.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5408.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5408.jpg" alt="/galleryImages/NSK_5408.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5408.jpg">
                                    <img src="galleryImages/NSK_5408.jpg" alt="/galleryImages/NSK_5408.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5411.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5411.jpg" alt="/galleryImages/NSK_5411.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5411.jpg">
                                    <img src="galleryImages/NSK_5411.jpg" alt="/galleryImages/NSK_5411.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5435.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5435.jpg" alt="/galleryImages/NSK_5435.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5435.jpg">
                                    <img src="galleryImages/NSK_5435.jpg" alt="/galleryImages/NSK_5435.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5445.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5445.jpg" alt="/galleryImages/NSK_5445.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5445.jpg">
                                    <img src="galleryImages/NSK_5445.jpg" alt="/galleryImages/NSK_5445.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5457.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5457.jpg" alt="/galleryImages/NSK_5457.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5457.jpg">
                                    <img src="galleryImages/NSK_5457.jpg" alt="/galleryImages/NSK_5457.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5469.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5469.jpg" alt="/galleryImages/NSK_5469.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5469.jpg">
                                    <img src="galleryImages/NSK_5469.jpg" alt="/galleryImages/NSK_5469.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5475.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5475.jpg" alt="/galleryImages/NSK_5475.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5475.jpg">
                                    <img src="galleryImages/NSK_5475.jpg" alt="/galleryImages/NSK_5475.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5481.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5481.jpg" alt="/galleryImages/NSK_5481.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5481.jpg">
                                    <img src="galleryImages/NSK_5481.jpg" alt="/galleryImages/NSK_5481.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5509.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5509.jpg" alt="/galleryImages/NSK_5509.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5509.jpg">
                                    <img src="galleryImages/NSK_5509.jpg" alt="/galleryImages/NSK_5509.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5521.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5521.jpg" alt="/galleryImages/NSK_5521.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5521.jpg">
                                    <img src="galleryImages/NSK_5521.jpg" alt="/galleryImages/NSK_5521.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5528.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5528.jpg" alt="/galleryImages/NSK_5528.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5528.jpg">
                                    <img src="galleryImages/NSK_5528.jpg" alt="/galleryImages/NSK_5528.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5539.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5539.jpg" alt="/galleryImages/NSK_5539.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5539.jpg">
                                    <img src="galleryImages/NSK_5539.jpg" alt="/galleryImages/NSK_5539.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5562.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5562.jpg" alt="/galleryImages/NSK_5562.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5562.jpg">
                                    <img src="galleryImages/NSK_5562.jpg" alt="/galleryImages/NSK_5562.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5564.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5564.jpg" alt="/galleryImages/NSK_5564.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5564.jpg">
                                    <img src="galleryImages/NSK_5564.jpg" alt="/galleryImages/NSK_5564.jpg" />
                                    <a href="#page" class="lb-close">x Close</a>
                                </div>
                            </li>
                            <li>
                                <a href="#/galleryImages/NSK_5567.jpg">
                                    <img width="210px;" height="180px;" src="galleryImages/NSK_5567.jpg" alt="/galleryImages/NSK_5567.jpg">
                                </a>
                                <div class="lb-overlay" id="/galleryImages/NSK_5567.jpg">
                                    <img src="galleryImages/NSK_5567.jpg" alt="/galleryImages/NSK_5567.jpg" />
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
