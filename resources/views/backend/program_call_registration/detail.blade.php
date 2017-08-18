@extends('layouts.master')
@section('title','Program Call Registration')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">Program Call Registration Detail</h1>
        <div class="panel panel-default">
            <div>
                <table class="table">
                    <tbody>
                    <tr>
                        <td><label>1st Author Affiliation </label></td>
                        <td>{{$program_call->first_author}}</td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                        <td>{{$program_call->email}}</td>
                    </tr>
                    <tr>
                        <td><label>Address</label></td>
                        <td>{{$program_call->address}}</td>
                    </tr>
                    <tr>
                        <td><label>2nd Author </label></td>
                        <td>{{$program_call->second_author}}</td>
                    </tr>
                    <tr>
                        <td><label>3rd Author</label></td>
                        <td>{{$program_call->third_author}}</td>
                    </tr>
                    <tr>
                        <td><label>Abstract</label></td>
                        <td>{{$program_call->abstract}}</td>
                    </tr>
                    <tr>
                        <td><label>Status</label></td>
                        <td>@if($program_call->status == 1)
                                Pending
                            @elseif($program_call->status == 2)
                                Confirm
                            @elseif($program_call->status == 3)
                                Cancel
                            @endif</td>
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
