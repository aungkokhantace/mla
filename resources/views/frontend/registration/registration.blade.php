@extends('layouts.master_frontend')
@section('title','Dashboard')
@section('content')
    <!-- Page Content-->
    <div class="container">

        <div class="row">
        <div class="col-md-3">
                <div class="list-group">
                    <a href="conference_reg_form.html#conference_reg_form" class="list-group-item active-sub">Conference Registration Form</a>
                    <a href="registration_fee_payment.html#reg_fee_payment" class="list-group-item">Registration Fees and Payment</a>
                    <a href="cancellations.html#cancellations" class="list-group-item">Cancellations</a>
                    <a href="letter_invitation.html#invitation" class="list-group-item">Letter of Invitation</a>
                    <a href="poster.html#poster" class="list-group-item">visa Requirement</a>
                </div>
            </div>

            @if(Session::has('message'))
                <div class="col-md-8 well bg-success">
                    {{Session::get('message')['body']}}
                </div>
            @endif
            <div class="col-md-9 reg_fee_payment">

                <h2>PROGRAM >> CONFERENCE REGISTRATION FORM</h2>
             <form class="form-horizontal" method="post" action="{{url('registration/store')}}" id="reg_form">
                 {{csrf_field()}}
                <fieldset>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">First Name</label>  
                  <div class="col-md-4">
                  <input id="first_name" name="first_name" type="text" placeholder="Enter Your First Name" class="form-control input-md">
                      <p class="text-danger">{{$errors->first('first_name')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Middle Name</label>  
                  <div class="col-md-4">
                  <input id="middle_name" name="middle_name" type="text" placeholder="Enter Your Middle Name" class="form-control input-md">
                      <p class="text-danger">{{$errors->first('middle_name')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Last Name</label>  
                  <div class="col-md-4">
                  <input id="last_name" name="last_name" type="text" placeholder="Enter Your Last Name" class="form-control input-md">
                      <p class="text-danger">{{$errors->first('last_name')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Organization</label>  
                  <div class="col-md-4">
                  <input id="organization" name="organization" type="text" placeholder="Enter Your Organization" class="form-control input-md">
                      <p class="text-danger">{{$errors->first('organization')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" type="email" placeholder="Enter Your Email" class="form-control input-md">
                      <p class="text-danger">{{$errors->first('email')}}</p>
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
                      <p class="text-danger">{{$errors->first('country')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="title">Phone No</label>  
                  <div class="col-md-4">
                  <input id="ph_no" name="ph_no" type="text" placeholder="Enter Your Phone" class="form-control input-md">
                      <p class="text-danger">{{$errors->first('ph_no')}}</p>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Registration Category</label>
                  <div class="col-md-4">
                    <select id="registration_category" name="registration_category" class="form-control">
                        <option value="" selected disabled>Select Registration Category</option>
                      <option value="1">Option one</option>
                      <option value="2">Option two</option>
                    </select>
                      <p class="text-danger">{{$errors->first('registration_category')}}</p>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Payment Type</label>
                  <div class="col-md-4">
                    <select id="payment_type" name="payment_type" class="form-control">
                        <option value="" selected disabled>Select Payment Type</option>
                      <option value="Cash">Cash</option>
                      <option value="2">Bank Transfer</option>
                    </select>
                      <p class="text-danger">{{$errors->first('payment_type')}}</p>
                  </div>
                </div>

                 <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-4">
                    <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
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
    <script type="text/javascript">
        $(document).ready(function() {

            $('#reg_form').validate({
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
                submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }
            });
        });
    </script>
@endsection
