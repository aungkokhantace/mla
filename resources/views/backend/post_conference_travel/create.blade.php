@extends('layouts.master')
@section('title','Post Conference Travel')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">{{isset($post_conference_travel)? 'Post Conference Travel Edit' : 'Post Conference Travel Entry'}}</h1>
        @if(isset($post_conference_travel))
            {!! Form::open(array('url' => 'backend/post_conference_travel/update', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'post_conference_travel_form')) !!}
        @else
            {!! Form::open(array('url' => 'backend/post_conference_travel/store', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'post_conference_travel_form')) !!}
        @endif
        <input type="hidden" name="id" value="{{isset($post_conference_travel)? $post_conference_travel->id:''}}"/>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Name<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="text" class="form-control" id="name" name="name" value="{{isset($post_conference_travel)?$post_conference_travel->name:Request::old('name')}}" placeholder="Enter Image Name"/>
                    <p class="text-danger">{{$errors->first('name')}}</p>
                </div>
            </div>
            {{--<div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Select Image<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="file" class="form-control" id="image" name="image"/>
                    <p class="text-danger">{{$errors->first('image')}}</p>
                </div>
            </div>--}}
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="code">Select Image</label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    @if(isset($post_conference_travel))
                        <div class="add_image_div add_image_div_red"
                             style="background-image: url({{ $post_conference_travel->image }});"></div>
                    @else
                        <div class="add_image_div add_image_div_red">
                        </div>
                    @endif
                    <input type="hidden" id="removeImageFlag" value="0" name="removeImageFlag">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="button" class="form-control image_remove_btn" value="Remove Image" id="removeImage" name="removeImage">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="description" class="text_bold_black">Description</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description" rows="10" cols="50">{{ isset($post_conference_travel)? $post_conference_travel->description:Request::old('description') }}</textarea>
                    <p class="text-danger">{{$errors->first('description')}}</p>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> -->
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="submit" name="submit" value="{{isset($post_conference_travel)? 'UPDATE' : 'ADD'}}" class="form-control btn-primary">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="button" value="CANCEL" class="form-control cancel_btn" onclick="cancel_setup('post_conference_travel')">
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Upload item image,</h4>
                        <p>Please ensure file is in .jpg, .png, .gif format.</p>
                    </div>

                    <div class="modal-body">
                        <div class="col-md-12 text-center">
                            <div class="form-group">
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 380px; height: 220px;">

                                    <img id='site_logoPopUp' src="" alt="Load Image"/>
                                </div>
                                <div data-provides="fileinput">
                        <span class="btn btn-default btn-file">
                            <span class="fileinput-new" data-trigger="fileinput">Select image</span>
                            <span class="fileinput-exists">Change</span>

                            <input id="site_logo" type="file" name="image" accept="image.*" />
                            <!-- {{--{{ Form::file('nric_front_img') }}--}} -->
                        </span>
                                    {{--<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>--}}
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" onclick="changeItemImage()" class="btn btn-default" data-dismiss="modal">Save</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-image-remove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Remove Image !</h4>
                        <p>Please ensure you want to remove this image .</p>
                    </div>

                    <div class="modal-body">
                        <div class="col-md-12 text-center">
                            <div class="form-group">
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            Are you sure want to remove this image ?
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" onclick="removeIMG()" class="btn btn-default" data-dismiss="modal">Yes</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="image_error_fileFormat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-md-12 text-center">
                            <div class="form-group">
                                <label class="font-big-red">You can only upload a .jpg / jpeg / png / gif file format.</label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="image_error_fileSize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-md-12 text-center">
                            <div class="form-group">
                                <label class="font-big-red">This is not an allowed file size !</label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    @stop
@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#post_conference_travel_form').validate({
                rules: {
                    name: 'required',
                    image: 'required'
                },
                messages: {
                    name: 'Name is required',
                    image: 'Image is required'
                },
                submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            $(".add_image_div").click(function(){
                showPopup();
            });

            $("#removeImage").click(function(){
                $('#modal-image-remove').modal();
            });

            $('INPUT[type="file"]').change(function () {

                var ext = this.value.match(/\.(.+)$/)[1];
                var f=this.files[0];
                var fileSize = (f.size||f.fileSize);
                var imgkbytes = Math.round(parseInt(fileSize)/1024);

                if(imgkbytes > 2000){
                    $('#image_error_fileSize').modal('show');
                    $('#site_logoPopUp').attr('src') = '';
                }
                // else{
                switch (ext) {
                    case 'jpg':
                    case 'jpeg':
                    case 'png':
                    case 'gif':
                        break;
                    default:
                        $('#image_error_fileFormat').modal('show');
                        $('#site_logoPopUp').attr('src') = '';
                }
                //}

            });
        });

        function saveConfig(action) {
            var rate = $("#SETTING_TAXRATE").val();
            $("#error_lbl_SETTING_TAXRATE").text("");
            var errorCount = 0;
            if(isNaN(rate)){
                $("#error_lbl_SETTING_TAXRATE").text("Invalid Tax Rate !. It allow Number only !");
                errorCount++;
            }

            if(errorCount>0) {
                return;
            }
            else{
                $("#backend_posconfigs").submit();
            }
        }

        function showPopup() {
            $('#modal-image').modal();
        }

        function changeItemImage(){
            var images = $('#modal-image img').attr('src');
            $('.add_image_div').css('background-image', 'url(' + images + ')');
            $('#removeImageFlag').val(0);
        }

        function removeIMG(){
            $('#modal-image img').attr('src','second.jpg');
            $('.add_image_div').css('background-image', 'url()');
            $('#removeImageFlag').val(1);
        }

    </script>
@stop