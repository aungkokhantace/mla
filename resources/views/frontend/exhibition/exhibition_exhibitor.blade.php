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
                        <form class="form-horizontal" method="post" action="{{url('exhibition_exhibitor/store')}}" id="frm_exhibition_exhibitor">
                            {{csrf_field()}}
                            <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Name</label>
                                    <div class="col-md-4">
                                        <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                                        <p class="text-danger" id="name_error">{{$errors->first('name')}}</p>
                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="address">Address</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="address" name="address"></textarea>
                                        <p class="text-danger" id="address_error">{{$errors->first('address')}}</p>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="telephone">Telephone</label>
                                    <div class="col-md-4">
                                        <input id="ph_no" name="ph_no" type="text" placeholder="" class="form-control input-md">
                                        <p class="text-danger" id="ph_no_error">{{$errors->first('ph_no')}}</p>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Email</label>
                                    <div class="col-md-4">
                                        <input id="email" name="email" type="email" placeholder="" class="form-control input-md">
                                        <p class="text-danger" id="email_error">{{$errors->first('email')}}</p>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="selectbasic">Business Type</label>
                                    <div class="col-md-4">
                                        <select id="business_type" name="business_type" class="form-control">
                                            <option value="" selected disabled>Select Business Type</option>
                                            <option value="1">Option one</option>
                                            <option value="2">Option two</option>
                                        </select>
                                        <p class="text-danger" id="business_type_error">{{$errors->first('business_type')}}</p>
                                    </div>
                                </div>


                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="submit"></label>
                                    <div class="col-md-4">
                                        <button type="button" id="btn" class="btn btn-primary" onclick="pre_add_confirm_setup()">SUBMIT</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
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

            $("#name_error").text("");
            var name = $("#name").val();
            if (name == "") {
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

            if (valid == true) {
                add_confirm_setup('exhibition_exhibitor');
            }
        }

            $(document).ready(function() {

            $('#frm_exhibition_exhibitor').validate({
                rules: {
                    name:'required',
                    address:'required',
                    ph_no:{required:true,number:true},
                    email:{required:true,email:true},
                    business_type:'required'
                },
                messages: {
                    name:'Name is required',
                    address:'Address is required',
                    ph_no:{required:'Phone is required',number:'Only number accepted'},
                    email:{required:'Email is required',email:'Please input email format.'},
                    business_type:'Business type is required'
                }
                /*submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }*/
            });
                $('#btn').on('click', function() {
                    $("#frm_exhibition_exhibitor").valid();
                });
        });
    </script>
@endsection