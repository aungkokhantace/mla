@extends('layouts.master')
@section('title','Program Poster Registration')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">Program Poster Registration Detail</h1>
        <div class="panel panel-default">
            <div>
                <table class="table">
                    <tbody>
                    <tr>
                        <td><label>Address </label></td>
                        <td>{{$program_poster->address}}</td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                        <td>{{$program_poster->email}}</td>
                    </tr>
                    <tr>
                        <td><label>Description</label></td>
                        <td>{{$program_poster->description}}</td>
                    </tr>
                    <tr>
                        <td><label>Title </label></td>
                        <td>{{$program_poster->title}}</td>
                    </tr>
                    <tr>
                        <td><label>Author Affiliation</label></td>
                        <td>
                            {{$program_poster->author}}
                        </td>
                    </tr>
                    <tr>
                        <td><label>Status</label></td>
                        <td>
                            @if($program_poster->status == 1)
                                Pending
                            @elseif($program_poster->status == 2)
                                Confirm
                            @elseif($program_poster->status == 3)
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
