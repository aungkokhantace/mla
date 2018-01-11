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
                    <select id="registration_category" name="registration_category" class="form-control" onchange="check_for_member();">
                        <option value="" selected disabled>Select Registration Category</option>
                        @foreach($registrationCategories as $registrationCategory)
                            <option value="{{$registrationCategory->id}}">{{$registrationCategory->name}}</option>
                        @endforeach
                    </select>
                      <p class="text-danger" id="registration_category_error">{{$errors->first('registration_category')}}</p>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group membership-no">
                  <label class="col-md-4 control-label" for="title">Membership No</label>
                  <div class="col-md-4">
                  <input id="membership_no" name="membership_no" type="text" placeholder="Enter Your Membership No" class="form-control input-md">
                      <p class="text-danger" id="membership_no_error">{{$errors->first('membership_no')}}</p>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Payment Type</label>
                  <div class="col-md-4">
                    <select id="payment_type" name="payment_type" class="form-control">
                        <option value="" selected disabled>Select Payment Type</option>
                      <!-- <option value="Cash">Cash</option> -->
                      <option value="Bank Transfer" selected>Bank Transfer</option>
                    </select>
                      <p class="text-danger" id="payment_type">{{$errors->first('payment_type')}}</p>
                  </div>
                </div>

                <!-- Itinerary Route -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="itinerary_route">Itinerary Route</label>
                  <div class="col-md-4">
                    <select id="itinerary_route" name="itinerary_route" class="form-control">
                        <option value="" selected disabled>Select Itinerary Route</option>
                        <option value="Direct to Naypyitaw">Direct to Naypyitaw</option>
                        <option value="Direct to Yangon">Direct to Yangon</option>
                        <option value="via Bangkok to Yangon">via Bangkok to Yangon</option>
                        <option value="Others">Others</option>
                    </select>
                      <p class="text-danger" id="itinerary_route">{{$errors->first('itinerary_route')}}</p>
                  </div>
                </div>

                <!-- Food -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="food">Foods</label>
                  <div class="col-md-4">
                    <select id="food" name="food" class="form-control">
                        <option value="" selected disabled>Select the Dietary Preferences</option>
                      <option value="Halal">Halal</option>
                      <option value="Vegetarian">Vegetarian</option>
                    </select>
                      <p class="text-danger" id="food">{{$errors->first('food')}}</p>
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
                    Payment can be made by:
                </p>
                <div class="solid-border">
                    <p class="big-red-text">Bank Transfer</p>
                    <p><b>For International (US Dollar currency)</b><p>
                    <p>Bank Name: Cooperative Bank Limited (PLC)</p>
                    <p>Bank Account Holder: Myanmar Library Association</p>
                    <p><b>Account Number</b> :  0010101200726548</p>
                    <p><b>SWIFT-CODE</b> :  CPOBMMMY</p>
                    <p><b>Bank Address</b> :  No. 334/336, corner of 23 st, & Strand Rd, Latha Township, Yangon, Myanmar</p>
                    <p>See <a href="#eligible_banks">Eligible Transferring Banks</a></p>
                    <p><b>For local (Myanmar Currency)</b><p>
                    <p>Bank Name:  Kanbawza Bank</p>
                    <p>Bank Account Holder: Myanmar Library Association</p>
                    <p><b>Account Number</b> :  133-302-06002875101</p>
                    <p><b>Bank Address</b> :  New University Avenue Road, Yankin TSP, Yangon, Myanmar</p>
                </div>
                <br>
                <p>
                Please make sure that your first and last names and CONSAL XVII are mentioned on the bank transfer.
Transfer receipt shall be scanned and send to CONSAL XVII Secretariat.
                </p>
                <br>
                <p>Email: <a href="http://registration@consalxvii.org">registration@consalxvii.org</a></p>
                <p>Tel: 95 67 418427; 418426</p>
                <p>Fax: 95 67 418426</p>
                <br>
                <p>Payment by bank transfer is only possible until 29 April 2017. </p>
                <p>Note: all bank transfer fees are covered by the applicant’s account and not to charge for the receiver account.</p>

                <h2 id="eligible_banks">Eligible Transferring Banks</h2>
                <!-- Start eligible banks -->
                <div class="tg-wrap">
                    <table class="tg">
                        <colgroup>
                        <col style="width: 30px">
                        <col style="width: 421px">
                        <col style="width: 277px">
                        <col style="width: 204px">
                        </colgroup>
                        <tr>
                            <th class="tg-yw4l">No.</th>
                            <th class="tg-yw4l">Bank Name</th>
                            <th class="tg-yw4l">Currency</th>
                            <th class="tg-yw4l">Country</th>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">1</td>
                            <td class="tg-yw4l">United Overseas Bank (UOB)</td>
                            <td class="tg-yw4l">USD, EUR, SGD</td>
                            <td class="tg-yw4l">Singapore</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">2</td>
                            <td class="tg-yw4l">DBS Bank</td>
                            <td class="tg-yw4l">USD, EUR, SGD<br></td>
                            <td class="tg-yw4l">Singapore</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">3</td>
                            <td class="tg-yw4l">First Gulf Bank (FGB)</td>
                            <td class="tg-yw4l">SGD</td>
                            <td class="tg-yw4l">Singapore</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">4</td>
                            <td class="tg-yw4l">OCBC Bank</td>
                            <td class="tg-yw4l">USD, EUR, SGD</td>
                            <td class="tg-yw4l">Singapore</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">5</td>
                            <td class="tg-yw4l">Bank Negara Indonesia-PT</td>
                            <td class="tg-yw4l">USD, SGD</td>
                            <td class="tg-yw4l">Singapore</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">6</td>
                            <td class="tg-yw4l">Standard Chartered Bank</td>
                            <td class="tg-yw4l">SGD</td>
                            <td class="tg-yw4l">Singapore</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">7</td>
                            <td class="tg-yw4l">May Bank</td>
                            <td class="tg-yw4l">USD</td>
                            <td class="tg-yw4l">Singapore</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">8</td>
                            <td class="tg-yw4l">CIMB Bank</td>
                            <td class="tg-yw4l">USD, EUR, SGD</td>
                            <td class="tg-yw4l">Singapore</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">9</td>
                            <td class="tg-yw4l">BTMU</td>
                            <td class="tg-yw4l">SGD</td>
                            <td class="tg-yw4l">Singapore</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">10</td>
                            <td class="tg-yw4l">Bangkok Bank</td>
                            <td class="tg-yw4l">USD, EUR, THB</td>
                            <td class="tg-yw4l">Thailand</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">11</td>
                            <td class="tg-yw4l">Kasikorn Bank</td>
                            <td class="tg-yw4l">USD, EUR, THB</td>
                            <td class="tg-yw4l">Thailand</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">12</td>
                            <td class="tg-yw4l">Siam Commercial Bank</td>
                            <td class="tg-yw4l">USD, EUR, THB</td>
                            <td class="tg-yw4l">Thailand</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">13</td>
                            <td class="tg-yw4l">Thanachartbank</td>
                            <td class="tg-yw4l">USD, EUR, THB</td>
                            <td class="tg-yw4l">Thailand</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">14</td>
                            <td class="tg-yw4l">CIMB Bank</td>
                            <td class="tg-yw4l">USD, EUR, THB</td>
                            <td class="tg-yw4l">Thailand</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">15</td>
                            <td class="tg-yw4l">Krung Thai Bank</td>
                            <td class="tg-yw4l">USD, THB</td>
                            <td class="tg-yw4l">Thailand</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">16</td>
                            <td class="tg-yw4l">Commerz Bank</td>
                            <td class="tg-yw4l">EUR</td>
                            <td class="tg-yw4l">Germany</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">17</td>
                            <td class="tg-yw4l">BTMU</td>
                            <td class="tg-yw4l">USD, JPY</td>
                            <td class="tg-yw4l">Japan</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">18</td>
                            <td class="tg-yw4l">ICBC Bank</td>
                            <td class="tg-yw4l">USD</td>
                            <td class="tg-yw4l">China</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">19</td>
                            <td class="tg-yw4l">First Commercial Bank</td>
                            <td class="tg-yw4l">USD</td>
                            <td class="tg-yw4l">China / Taiwan</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">20</td>
                            <td class="tg-yw4l">Cathay United Bank</td>
                            <td class="tg-yw4l">USD, EUR</td>
                            <td class="tg-yw4l">Taiwan</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">21</td>
                            <td class="tg-yw4l">OCBC Bank</td>
                            <td class="tg-yw4l">CNY</td>
                            <td class="tg-yw4l">China<br></td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">22</td>
                            <td class="tg-yw4l">China Construction Bank Cooperation</td>
                            <td class="tg-yw4l">CNY</td>
                            <td class="tg-yw4l">China</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">23</td>
                            <td class="tg-yw4l">United Bank of India</td>
                            <td class="tg-yw4l">USD, EUR</td>
                            <td class="tg-yw4l">India</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">24</td>
                            <td class="tg-yw4l">Bank of India</td>
                            <td class="tg-yw4l">USD, EUR</td>
                            <td class="tg-yw4l">India</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">25</td>
                            <td class="tg-yw4l">Uninoe Di Banche</td>
                            <td class="tg-yw4l">EUR</td>
                            <td class="tg-yw4l">Italy</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">26</td>
                            <td class="tg-yw4l">Banque de Commercet de Placement</td>
                            <td class="tg-yw4l">CHF, USD</td>
                            <td class="tg-yw4l">Switzerland</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">27</td>
                            <td class="tg-yw4l">May Bank</td>
                            <td class="tg-yw4l">USD, EUR, SGD</td>
                            <td class="tg-yw4l">Malaysia</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">28</td>
                            <td class="tg-yw4l">Korea Exchange Bank</td>
                            <td class="tg-yw4l">USD, EUR, KRW</td>
                            <td class="tg-yw4l">Seoul, Korea</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">29</td>
                            <td class="tg-yw4l">Shinhan Bank</td>
                            <td class="tg-yw4l">USD</td>
                            <td class="tg-yw4l">Seoul, Korea</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">30</td>
                            <td class="tg-yw4l">Skandinaviskaenskildabanken</td>
                            <td class="tg-yw4l">EUR</td>
                            <td class="tg-yw4l">Sweden</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">31</td>
                            <td class="tg-yw4l">OCBC Yangon</td>
                            <td class="tg-yw4l">USD, EUR, MMK</td>
                            <td class="tg-yw4l">Myanmar</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">32</td>
                            <td class="tg-yw4l">Bred Bank Banque Popolartre</td>
                            <td class="tg-yw4l">EUR</td>
                            <td class="tg-yw4l">Paris, France</td>
                        </tr>
                    </table>
                </div>
                <!-- End eligible banks -->
            </div>
        </div>
        <!-- /.row -->
    </div>
@stop
@section('page_script')
    <!-- <script src="/assets/js/utils.js"></script> -->
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

            //to check whether user selects "Member" in registration categories //if so, validate membership no text box
            var member_flag = document.getElementById('registration_category').value;
            if(member_flag == "2"){
                $("#membership_no_error").text("");
                var membership_no = $("#membership_no").val();
                if(membership_no == "" || membership_no == "undefined"){
                    $("#membership_no_error").text("Membership no is required !");
                    valid = false;
                }
            }

            $("#payment_type_error").text("");
            var payment_type = $("#payment_type").val();
            if(payment_type == ""){
                valid = false;
            }

            $("#payment_type_error").text("");
            var payment_type = $("#payment_type").val();
            if(payment_type == ""){
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
            $(".membership-no").hide();

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
                    payment_type:'required',
                    itinerary_route:'required',
                    food:'required'
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
                    payment_type:'Payment type is required',
                    itinerary_route:'Itinerary Route is required',
                    food:'Dietary Preferences is required'
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

        function check_for_member(){
          var member_flag = document.getElementById('registration_category').value;
          //check whether category is local delegate or not
          if(member_flag == "2"){
              $(".membership-no").show();
          }
          else{
              $(".membership-no").hide();
          }
      }
    </script>
@endsection
