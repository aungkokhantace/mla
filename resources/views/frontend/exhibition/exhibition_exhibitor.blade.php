@extends('layouts.master_frontend')
@section('title','Exhibition Exhibitor')
@section('content')
@include('layouts.partial.nav_exhibition')
@if(Session::has('message'))
    <div class="col-md-8 well bg-success">
        {{Session::get('message')['body']}}
    </div>
@endif
            <div class="col-md-9 col-sm-12 col-xs-12 exhibit" id="exhibit_form">
                <h2>EXHIBITION & SPONSORSHIP >> EXHIBITOR AND SPONSOR FORM</h2>
                <div class="col-md-12">
                    <div class="row">
                        <!-- <form class="form-horizontal call_for_paper" method="post" action="{{url('exhibition_exhibitor/store')}}" id="frm_exhibition_exhibitor" files="true"> -->
                        {!! Form::open(array('url' => 'exhibition_exhibitor/store', 'method'=> 'post', 'class'=> 'form-horizontal call_for_paper','files' => true,'id'=>'frm_exhibition_exhibitor')) !!}
                            {{csrf_field()}}
                            <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="first_name">First Name</label>
                                    <div class="col-md-4">
                                        <input id="first_name" name="first_name" type="text" placeholder="Enter Your First Name" class="form-control input-md">
                                        <p class="text-danger" id="first_name_error">{{$errors->first('first_name')}}</p>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="middle_name">Middle Name</label>
                                    <div class="col-md-4">
                                        <input id="middle_name" name="middle_name" type="text" placeholder="Enter Your Middle Name" class="form-control input-md">
                                        <p class="text-danger" id="middle_name_error">{{$errors->first('middle_name')}}</p>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="last_name">Last Name</label>
                                    <div class="col-md-4">
                                        <input id="last_name" name="last_name" type="text" placeholder="Enter Your Last Name" class="form-control input-md">
                                        <p class="text-danger" id="last_name_error">{{$errors->first('first_name')}}</p>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="organization">Organization</label>
                                    <div class="col-md-4">
                                        <input id="organization" name="organization" type="text" placeholder="Enter Your Organization" class="form-control input-md">
                                        <p class="text-danger" id="organization_error">{{$errors->first('organization')}}</p>
                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="address">Address</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="address" name="address" placeholder="Enter Your Address"></textarea>
                                        <p class="text-danger" id="address_error">{{$errors->first('address')}}</p>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="telephone">Telephone</label>
                                    <div class="col-md-4">
                                        <input id="ph_no" name="ph_no" type="text" placeholder="Enter Your Telephone" class="form-control input-md">
                                        <p class="text-danger" id="ph_no_error">{{$errors->first('ph_no')}}</p>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Email</label>
                                    <div class="col-md-4">
                                        <input id="email" name="email" type="email" placeholder="Enter Your Email" class="form-control input-md">
                                        <p class="text-danger" id="email_error">{{$errors->first('email')}}</p>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="selectbasic">Business Type</label>
                                    <div class="col-md-4">
                                        <select id="business_type" name="business_type" class="form-control">
                                            <option value="" selected disabled>Select Business Type</option>
                                            @foreach($sponsorPackages as $sponsorPackage)
                                            <option value="{{$sponsorPackage->id}}">{{$sponsorPackage->name}}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger" id="business_type_error">{{$errors->first('business_type')}}</p>
                                    </div>
                                </div>

                                <!-- Start Logo -->
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <label for="code">Logo*</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="add_image_div add_image_div_red add_image_div_frontend">
                                            </div>
                                        <input type="hidden" id="removeImageFlag" value="0" name="removeImageFlag">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <input type="button" class="form-control image_remove_btn"  value="Remove Image" id="removeImage" name="removeImage">
                                    </div><br>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <p class="text-danger" id="image_error">{{$errors->first('image')}}</p>
                                    </div>
                                </div>
                                <!-- End Logo -->


                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="submit"></label>
                                    <div class="col-md-4">
                                        <button type="button" id="btn" class="btn btn-primary" onclick="pre_add_confirm_setup()">SUBMIT</button>
                                    </div>
                                </div>

                                <!-- Start Modal -->
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

                                                    <input id="image" type="file" name="image" accept="image.*" />

                                                    {{--{{ Form::file('nric_front_img') }}--}}
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
                            <!-- End Modal -->

                            </fieldset>
                        <!-- </form> -->
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </div>


</div>

@stop
@section('page_script')
    <script type="text/javascript">
        function pre_add_confirm_setup() {

            var valid = true;

            $("#first_name_error").text("");
            var first_name = $("#first_name").val();
            if (first_name == "") {
                valid = false;
            }

            // $("#middle_name_error").text("");
            // var middle_name = $("#middle_name").val();
            // if (middle_name == "") {
            //     valid = false;
            // }

            // $("#last_name_error").text("");
            // var last_name = $("#last_name").val();
            // if (last_name == "") {
            //     valid = false;
            // }

            $("#organization").text("");
            var organization = $("#organization").val();
            if (organization == "") {
                valid = false;
            }

            $("#address_error").text("");
            var address = $("#address").val();
            if (address == "") {
                valid = false;
            }

            $("#ph_no_error").text("");
            var ph_no = $("#ph_no").val();
            if (ph_no == "") {
                valid = false;
            }


            $("#email_error").text("");
            var email = $("#email").val();
            if (email == "") {
                valid = false;
            }


            $("#business_type_error").text("");
            var business_type = $("#business_type").val();
            if (business_type == "") {
                valid = false;
            }

            $("#image_error").text("");
            var image = $("#image").val();
            if (image == "") {
                valid = false;
                $("#image_error").text("Image is required");
            }

            if (valid == true) {
                add_confirm_setup('exhibition_exhibitor');
            }
        }

            $(document).ready(function() {

            $('#frm_exhibition_exhibitor').validate({
                rules: {
                    first_name:'required',
                    // middle_name:'required',
                    // last_name:'required',
                    organization:'required',
                    address:'required',
                    ph_no:{required:true,number:true},
                    email:{required:true,email:true},
                    business_type:'required',
                    image:'required'
                },
                messages: {
                    first_name:'First Name is required',
                    // middle_name:'Middle Name is required',
                    // last_name:'Last Name is required',
                    organization:'Organization is required',
                    address:'Address is required',
                    ph_no:{required:'Phone is required',number:'Only number accepted'},
                    email:{required:'Email is required',email:'Please input email format.'},
                    business_type:'Business type is required',
                    image:'Image is required'
                }
                /*submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }*/
            });
                $('#btn').on('click', function() {
                    $("#frm_exhibition_exhibitor").valid();
                });


            // Start Image Upload
            $(".add_image_div").click(function () {
                showPopup();
            });

            $("#removeImage").click(function () {
                $('#modal-image-remove').modal();
            });

            $('INPUT[type="file"]').change(function () {

                var ext = this.value.match(/\.(.+)$/)[1];
                var f = this.files[0];
                var fileSize = (f.size || f.fileSize);
                var imgkbytes = Math.round(parseInt(fileSize) / 1024);
                if (imgkbytes > 2000) {
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
            // End Image Upload
        });

        // Start Image Upload Functions
        function showPopup() {
            $('#modal-image').modal();
        }

        function changeItemImage() {
            var images = $('#modal-image img').attr('src');
            $('.add_image_div').css('background-image', 'url(' + images + ')');
            $('#removeImageFlag').val(0);
        }

        function removeIMG() {
            $('#modal-image img').attr('src', 'second.jpg');
            $('.add_image_div').css('background-image', 'url()');
            $('#removeImageFlag').val(1);
        }
        // End Image Upload Functions
    </script>
@endsection
