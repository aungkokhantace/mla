@extends('layouts.master_frontend')
@section('title','Dashboard')
@section('content')    
@include('layouts.partial.nav_registration')

            @if(Session::has('message'))
                <div class="col-md-8 well bg-success">
                    {{Session::get('message')['body']}}
                </div>
            @endif
            <div class="col-md-9 reg_fee_payment">

                <h2>REGISTRATION >> CONFERENCE REGISTRATION FORM</h2>
             <form class="form-horizontal call_for_paper" method="post" action="{{url('registration/store')}}" id="frm_registration">
                 {{csrf_field()}}
                <fieldset>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">First Name</label>  
                  <div class="col-md-4">
                  <input id="first_name" name="first_name" type="text" placeholder="Enter Your First Name" class="form-control input-md">
                      <p class="text-danger" id="first_name_error">{{$errors->first('first_name')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Middle Name</label>  
                  <div class="col-md-4">
                  <input id="middle_name" name="middle_name" type="text" placeholder="Enter Your Middle Name" class="form-control input-md">
                      <p class="text-danger" id="middle_name_error">{{$errors->first('middle_name')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Last Name</label>  
                  <div class="col-md-4">
                  <input id="last_name" name="last_name" type="text" placeholder="Enter Your Last Name" class="form-control input-md">
                      <p class="text-danger" id="last_name_error">{{$errors->first('last_name')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Organization</label>  
                  <div class="col-md-4">
                  <input id="organization" name="organization" type="text" placeholder="Enter Your Organization" class="form-control input-md">
                      <p class="text-danger" id="organization_error">{{$errors->first('organization')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" type="email" placeholder="Enter Your Email" class="form-control input-md">
                      <p class="text-danger" id="email_error">{{$errors->first('email')}}</p>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Country</label>
                  <div class="col-md-4">
                    <select id="country" name="country" class="form-control select_custom">
                        <option value="" selected disabled>Select Country</option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                    </select>
                      <p class="text-danger" id="country_error">{{$errors->first('country')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Phone No</label>  
                  <div class="col-md-4">
                  <input id="ph_no" name="ph_no" type="text" placeholder="Enter Your Phone" class="form-control input-md">
                      <p class="text-danger" id="ph_no_error">{{$errors->first('ph_no')}}</p>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Registration Category</label>
                  <div class="col-md-4">
                    <select id="registration_category" name="registration_category" class="form-control">
                        <option value="" selected disabled>Select Registration Category</option>
                        @foreach($registrationCategories as $registrationCategory)
                            <option value="{{$registrationCategory->id}}">{{$registrationCategory->name}}</option>
                        @endforeach
                    </select>
                      <p class="text-danger" id="registration_category_error">{{$errors->first('registration_category')}}</p>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Payment Type</label>
                  <div class="col-md-4">
                    <select id="payment_type" name="payment_type" class="form-control">
                        <option value="" selected disabled>Select Payment Type</option>
                      <option value="Cash">Cash</option>
                      <option value="Bank Transfer">Bank Transfer</option>
                    </select>
                      <p class="text-danger" id="payment_type">{{$errors->first('payment_type')}}</p>
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
                <br/> 
                <h2>Bank Account Information</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <!-- /.row -->
    </div>
@stop
@section('page_script')
    <script src="/assets/js/utils.js"></script>
    <script type="text/javascript">
        function pre_add_confirm_setup(){

            var valid = true;
            $("#first_name_error").text("");
            var first_name = $("#first_name").val();
            if(first_name == ""){
                valid = false;
            }

            $("#middle_name_error").text("");
            var middle_name = $("#middle_name").val();
            if(middle_name == ""){
                valid = false;
            }

            $("#last_name_error").text("");
            var last_name = $("#last_name").val();
            if(last_name == ""){
                valid = false;
            }

            $("#organization_error").text("");
            var organization = $("#organization").val();

            if(organization == ""){
                valid = false;
            }

            $("#email_error").text("");
            var email = $("#email").val();
            if(email == ""){
                valid = false;
            }


            $("#country_error").text("");
            var country = $("#country").val();
            if(country == ""){
                valid = false;
            }

            $("#ph_no_error").text("");
            var ph_no = $("#ph_no").val();
            if(ph_no == ""){
                valid = false;
            }

            $("#registration_category_error").text("");
            var registration_category = $("#registration_category").val();
            if(registration_category == ""){
                valid = false;
            }

            $("#payment_type_error").text("");
            var payment_type = $("#payment_type").val();
            if(payment_type == ""){
                valid = false;
            }

            if (valid == true){
                add_confirm_setup('registration');
            }
        }
        $(document).ready(function() {

            $('#frm_registration').validate({
                rules: {
                    first_name:'required',
                    middle_name:'required',
                    last_name:'required',
                    organization: 'required',
                    email:{required:true,email:true},
                    country:'required',
                    ph_no:{required:true,number:true},
                    registration_category:'required',
                    payment_type:'required'
                },
                messages: {
                    first_name:'First Name is required',
                    middle_name:'Middle Name is required',
                    last_name:'Last Name is required',
                    organization: 'Organization is required',
                    email:{required:'Email is required',email:'Please input email format.'},
                    country:'Country is required',
                    ph_no:{required:'Phone is required',number:'Only number accepted'},
                    registration_category:'Registration category is required',
                    payment_type:'Payment type is required'
                },
               /* submitHandler: function (form) {
                    $('button[type="button"]').attr('disabled', 'disabled');
                    form.submit();
                }*/
            });
            $('#btn').on('click', function() {
                $("#frm_registration").valid();
            });
        });
    </script>
@endsection
