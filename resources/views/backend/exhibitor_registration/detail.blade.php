@extends('layouts.master')
@section('title','Conference Registration')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">Exhibitor & Sponsor Detail</h1>
        <div class="panel panel-default">
            <div>
                <table class="table">
                    <tbody>
                    <tr>
                        <td><label>Name </label></td>
                        <td>{{$exhibitor->first_name}} {{$exhibitor->middle_name}} {{$exhibitor->last_name}}</td>
                    </tr>
                    <tr>
                        <td><label>Address</label></td>
                        <td>{{$exhibitor->address}}</td>
                    </tr>
                    <tr>
                        <td><label>Telephone</label></td>
                        <td>{{$exhibitor->ph_no}}</td>
                    </tr>
                    <tr>
                        <td><label>Email </label></td>
                        <td>{{$exhibitor->email}}</td>
                    </tr>
                    <tr>
                        <td><label>Status</label></td>
                        <td>
                            @if($exhibitor->status == 1)
                                Pending
                            @elseif($exhibitor->status == 2)
                                Confirm
                            @elseif($exhibitor->status == 3)
                                Cancel
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td><label>Logo</label></td>
                        <td><img class="detail-sponsor-logo" src="{{$exhibitor->image}}"></td>
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
