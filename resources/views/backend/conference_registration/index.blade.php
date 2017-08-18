@extends('layouts.master')
@section('title','Conference Registration')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">Conference Registration Listing</h1>
        @if(count(Session::get('message')) != 0)
            <div>
            </div>
        @endif

       {{-- <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <div class="buttons pull-right">
                    <button type="button" onclick='create_setup("conference_registration");' class="btn btn-default btn-md first_btn">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>
                    <button type="button" onclick='edit_setup("conference_registration");' class="btn btn-default btn-md second_btn">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" onclick="delete_setup('conference_registration');" class="btn btn-default btn-md third_btn">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>--}}
        {!! Form::open(array('id'=> 'frm_conference_registration' ,'url' => 'backend/conference_registration/destroy', 'class'=> 'form-horizontal user-form-border')) !!}
        {{ csrf_field() }}
        <input type="hidden" id="selected_checkboxes" name="selected_checkboxes" value="">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="listing">
                    <input type="hidden" id="pageSearchedValue" name="pageSearchedValue" value="">
                    @foreach($conference_registrations as $conference_registration)
                    <table class="table table-striped list-table" id="list-table">
                        <thead>
                        <tr>
                            <th><input type='checkbox' name='check' id='check_all'/></th>
                          {{--  <th>First Name</th>
                            <th>Middle Name</th>--}}
                            <th>Last Name</th>
                            <th>Organization</th>
                            <th>Email</th>
                            <th>Status</th>
                            @if($conference_registration->status != 3)
                            <th>Change Status</th>
                                @endif
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th></th>
                            {{--<th class="search-col" con-id="fname">First Name</th>
                            <th class="search-col" con-id="mame">Middle Name</th>--}}
                            <th class="search-col" con-id="lame">Last Name</th>
                            <th class="search-col" con-id="organization">Organization</th>
                            <th class="search-col" con-id="email">Email</th>
                            <th class="search-col" con-id="status">Status</th>
                            @if($conference_registration->status != 3)
                            <th></th>
                                @endif
                        </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <input type="hidden" name="id" value="{{$conference_registration->id}}">
                                <td><input type="checkbox" class="check_source" name="edit_check" value="{{ $conference_registration->id }}" id="all"></td>
                                {{--<td>{{$conference_registration->first_name}}</td>
                                <td>{{$conference_registration->middle_name}}</td>--}}
                                <td><a href="/backend/conference_registration/detail/{{$conference_registration->id}}">{{$conference_registration->last_name}}</a></td>
                                <td>{{$conference_registration->organization}}</td>
                                <td>{{$conference_registration->email}}</td>
                                <td>
                                    @if($conference_registration->status == 1)
                                        Pending
                                    @elseif($conference_registration->status == 2)
                                        Confirm
                                    @elseif($conference_registration->status == 3)
                                        Cancel
                                    @endif
                                </td>
                                @if($conference_registration->status != 3)
                                <td>
                                    <div class="btn btn-group-sm">
                                        @if($conference_registration->status == 1)
                                            <a class="btn btn-success" onclick="status_confirm('conference_registration')">Confirm</a><a onclick="status_cancel('conference_registration')" class="btn btn-danger">Cancel</a>
                                        @elseif($conference_registration->status == 2)
                                            <a onclick="status_cancel('conference_registration')" class="btn btn-danger">Cancel</a>
                                        @elseif($conference_registration->status == 3)

                                        @endif
                                    </div>
                                </td>
                                    @endif
                            </tr>
                        </tbody>
                    </table>
                        @endforeach
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop
@section('page_script')
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function() {

            $('#list-table tfoot th.search-col').each( function () {
                var title = $('#list-table thead th').eq( $(this).index() ).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );

            var table = $('#list-table').DataTable({
                aLengthMenu: [
                    [5,25, 50, 100, 200, -1],
                    [5,25, 50, 100, 200, "All"]
                ],
                iDisplayLength: 5,
                "order": [[ 2, "desc" ]],
                stateSave: false,
                "pagingType": "full",
                "dom": '<"pull-right m-t-20"i>rt<"bottom"lp><"clear">',

            });

            // Apply the search
            table.columns().eq( 0 ).each( function ( colIdx ) {
                $( 'input', table.column( colIdx ).footer() ).on( 'keyup change', function () {
                    table
                            .column( colIdx )
                            .search( this.value )
                            .draw();
                } );

            });
        });
    </script>
@stop
