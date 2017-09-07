@extends('layouts.master')
@section('title','Program Call Registration')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">Program Call Registration Listing</h1>
        @if(count(Session::get('message')) != 0)
            <div>
            </div>
        @endif

        {{--<div class="row">
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
                <button type="button" onclick="report_search_by_date('backend/report/program_call');" class="form-control btn-primary">Preview</button>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <button type="button" onclick="report_export('backend/report/program_call');" class="form-control btn-primary">Export Excel</button>
            </div>

        </div>

        {!! Form::open(array('id'=> 'frm_program_call_registration' ,'url' => 'backend/program_call/destroy', 'class'=> 'form-horizontal user-form-border')) !!}
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
                            <th>1st Author Affiliation</th>
                            <th>Email</th>
                            <th>2nd Author</th>
                            <th>3rd Author</th>
                            <th>Status</th>
                            <th>Change Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th class="search-col" con-id="lame">1st Author Affiliation</th>
                            <th class="search-col" con-id="email">Email</th>
                            <th class="search-col" con-id="organization">2nd Author</th>
                            <th class="search-col" con-id="organization">3rd Author</th>
                            <th class="search-col" con-id="status">Status</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($program_calls as $program_call)
                            <tr>
                                <td><input type="checkbox" class="check_source" name="edit_check" value="{{ $program_call->id }}" id="all"></td>

                                <td><a href="/backend/program_call/detail/{{$program_call->id}}">{{$program_call->first_author}}</a></td>
                                <td>{{$program_call->email}}</td>
                                <td>{{$program_call->second_author}}</td>
                                <td>{{$program_call->third_author}}</td>
                                <td>
                                    @if($program_call->status == 1)
                                        Pending
                                    @elseif($program_call->status == 2)
                                        Confirm
                                    @elseif($program_call->status == 3)
                                        Cancel
                                    @endif
                                </td>
                                @if($program_call->status != 3 or $program_call->status !=2)
                                <td>
                                    <div class="btn btn-group-sm">
                                        @if($program_call->status == 1)
                                            <a class="btn btn-success" onclick="status_confirm_programcall({{$program_call->id}})" >Confirm</a><a onclick="status_cancel_programcall({{$program_call->id}})" class="btn btn-danger">Cancel</a>
                                        @elseif($program_call->status == 2)
                                            {{--<a onclick="status_cancel_programcall('program_call')" class="btn btn-danger">Cancel</a>--}}
                                        @elseif($program_call->status == 3)

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
