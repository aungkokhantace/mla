@extends('layouts.master')
@section('title','Conference Registration')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">Conference Registration Detail</h1>
        <div class="panel panel-default">
            <div>
                <table class="table">
                    <tbody>
                    <tr>
                        <td><label>First Name </label></td>
                        <td>{{$conference_registration->first_name}}</td>
                    </tr>
                    <tr>
                        <td><label>Middle Name </label></td>
                        <td>{{$conference_registration->middle_name}}</td>
                    </tr>
                    <tr>
                        <td><label>Last Name </label></td>
                        <td>{{$conference_registration->last_name}}</td>
                    </tr>
                    <tr>
                        <td><label>Organization </label></td>
                        <td>{{$conference_registration->organization}}</td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                        <td>{{$conference_registration->email}}</td>
                    </tr>
                    <tr>
                        <td><label>Country</label></td>
                        <td>{{$conference_registration->Country->name}}</td>
                    </tr>
                    <tr>
                        <td><label>Phone No</label></td>
                        <td>{{$conference_registration->ph_no}}</td>
                    </tr>
                    <tr>
                        <td><label>Registration Category</label></td>
                        <!-- <td>{{$conference_registration->registration_category}}</td> -->
                        <td>{{$conference_registration->RegistrationCategory->name}}</td>
                    </tr>
                    @if(isset($conference_registration->registration_category) && $conference_registration->registration_category == 2)
                    <tr>
                        <td><label>Membership Number</label></td>
                        <td>{{$conference_registration->membership_no}}</td>
                    </tr>
                    @endif
                    <tr>
                        <td><label>Payment Type</label></td>
                        <td>{{$conference_registration->payment_type}}</td>
                    </tr>
                    <tr>
                        <td><label>Status</label></td>
                        <td>
                            @if($conference_registration->status == 1)
                                Pending
                            @elseif($conference_registration->status == 2)
                                Confirm
                            @elseif($conference_registration->status == 3)
                                Cancel
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@stop
@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#latest_new_form').validate({
                rules: {
                    description: 'required'
                },
                messages: {
                    description: 'Description is required',
                },
                submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }
            });
        });
    </script>
@stop
