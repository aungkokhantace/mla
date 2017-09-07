@extends('layouts.master')
@section('title','Conference Registration')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">Conference Registration Listing</h1>
        @if(count(Session::get('message')) != 0)
            <div>
            </div>
        @endif
        <br>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <label for="from_date" class="text_bold_black">From Date</label>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="input-group date dateTimePicker" data-provide="datepicker" id="datepicker_from">
                    <input type="text" class="form-control" id="from_date" name="from_date" value="{{isset($from_date)? $from_date : ''}}">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
                <p class="text-danger">{{$errors->first('from_date')}}</p>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <label for="to_date" class="text_bold_black">To Date</label>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="input-group date dateTimePicker" data-provide="datepicker"  id="datepicker_to">
                    <input type="text" class="form-control" id="to_date" name="date" value="{{isset($to_date)? $to_date : ''}}">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
                <p class="text-danger">{{$errors->first('to_date')}}</p>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <label for="type" class="text_bold_black">Status</label>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <select class="form-control" name="type" id="type">
                        <option value="all" {{($type == "all")? 'selected' : ''}}>All</option>
                        <option value="1" {{($type == "1")? 'selected' : ''}}>Pending</option>
                        <option value="2" {{($type == "2")? 'selected' : ''}}>Confirm</option>
                        <option value="3" {{($type == "3")? 'selected' : ''}}>Cancel</option>
                    </select>
                </div>

            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <button type="button" onclick="report_search_by_date('backend/report/conference_registration');" class="form-control btn-primary">Preview</button>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <button type="button" onclick="report_export('backend/report/conference_registration');" class="form-control btn-primary">Export Excel</button>
            </div>

        </div>
        {!! Form::open(array('id'=> 'frm_conference_registration' ,'url' => 'backend/conference_registration/destroy', 'class'=> 'form-horizontal user-form-border')) !!}
        {{ csrf_field() }}
        <input type="hidden" id="selected_checkboxes" name="selected_checkboxes" value="">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="listing">
                    <input type="hidden" id="pageSearchedValue" name="pageSearchedValue" value="">
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
                            <th>Change Status</th>
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
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($conference_registrations as $conference_registration)
                            <tr>
                                <input type="hidden" name="id" value="{{$conference_registration->id}}">
                                <td><input type="checkbox" class="check_source" name="edit_check" value="{{ $conference_registration->id }}" id="all"></td>
                                {{--<td>{{$conference_registration->first_name}}</td>
                                <td>{{$conference_registration->middle_name}}</td>--}}
                                <td>{{$conference_registration->last_name}}</td>
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
                                @if($conference_registration->status != 3 or $conference_registration->status != 2)
                                <td>
                                    <div class="btn btn-group-sm">
                                        @if($conference_registration->status == 1)
                                            <a class="btn btn-success" onclick="status_confirm_registration({{$conference_registration->id}})">Confirm</a><a onclick="status_cancel_registration({{$conference_registration->id}})" class="btn btn-danger">Cancel</a>
                                        @elseif($conference_registration->status == 2)

                                        @elseif($conference_registration->status == 3)

                                        @endif
                                    </div>
                                </td>
                                    @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
            $('#datepicker_from').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                allowInputToggle: true,
            });

            $('#datepicker_to').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                allowInputToggle: true,
                minDate: "20-08-2016",

            });
        });
    </script>
@stop
