@extends('layouts.master_frontend')
@section('title','Dashboard')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="list-group">
                    <a href="sponsor_support.html#sponsor_support" class="list-group-item">Sponsors and Supporters</a>
                    <a href="exhibit_sponsorship.html#exhibit" class="list-group-item">Exhibit and Sponsorship Opportunities</a>
                    <a href="exhibitor_sponsor_form.html#exhibit_form" class="list-group-item">Exhibit and Sponsor Form</a>
                    <a href="booth_price_facilities.html#booth" class="list-group-item active-sub">Booth Price and Facilities</a>
                    <a href="floor_plan_exhibition.html#floor_plan" class="list-group-item">Floor Plan and Exhibition</a>
                    <a href="exhibitor_sponsor_agreement.html#agreement" class="list-group-item">Exhibitors and Sponsor Agreement</a>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 exhibit" id="exhibit_form">
                <h2>EXHIBITION & SPONSORSHIP >> EXHIBITOR AND SPONSOR FORM</h2>
                <div class="col-md-12">
                    <div class="row">
                        <form class="form-horizontal" method="post" action="{{url('exhibition_exhibitor/store')}}" id="exhibitor_form">
                            {{csrf_field()}}
                            <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Name</label>
                                    <div class="col-md-4">
                                        <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="address">Address</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="address" name="address"></textarea>
                                        <p class="text-danger">{{$errors->first('address')}}</p>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="telephone">Telephone</label>
                                    <div class="col-md-4">
                                        <input id="ph_no" name="ph_no" type="text" placeholder="" class="form-control input-md">
                                        <p class="text-danger">{{$errors->first('ph_no')}}</p>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Email</label>
                                    <div class="col-md-4">
                                        <input id="email" name="email" type="email" placeholder="" class="form-control input-md">
                                        <p class="text-danger">{{$errors->first('email')}}</p>
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
                                        <p class="text-danger">{{$errors->first('business_type')}}</p>
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
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.row -->
    @stop
@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#exhibitor_form').validate({
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
                },
                submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }
            });
        });
    </script>
@endsection