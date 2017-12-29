@extends('layouts.master')
@section('title','Program Poster Registration')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">Program Poster Registration Listing</h1>
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
        {!! Form::open(array('id'=> 'frm_program_poster_registration' ,'url' => 'backend/program_poster/destroy', 'class'=> 'form-horizontal user-form-border')) !!}
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
                            <th>Title</th>
                            <th>Author Affiliation</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Change Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th class="search-col" con-id="lame">Title</th>
                            <th class="search-col" con-id="organization">Author Affiliation</th>
                            <th class="search-col" con-id="email">Email</th>
                            <th class="search-col" con-id="organization">Address</th>
                            <th class="search-col" con-id="status">Status</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($program_posters as $program_poster)
                            <tr>
                                <td><input type="checkbox" class="check_source" name="edit_check" value="{{ $program_poster->id }}" id="all"></td>

                                <td><a href="/backend/program_poster/detail/{{$program_poster->id}}">{{$program_poster->title}}</a></td>
                                <td>{{$program_poster->author}}</td>
                                <td>{{$program_poster->email}}</td>
                                <td>{{$program_poster->address}}</td>
                                <td>
                                    @if($program_poster->status == 1)
                                        Pending
                                    @elseif($program_poster->status == 2)
                                        Confirm
                                    @elseif($program_poster->status == 3)
                                        Cancel
                                    @endif
                                </td>
                                @if($program_poster->status != 3 or $program_poster->status != 2)
                                <td>
                                    <div class="btn btn-group-sm">
                                        @if($program_poster->status == 1)
                                            <a class="btn btn-success" onclick="status_confirm_program_poster({{$program_poster->id}})">Confirm</a><a onclick="status_cancel_program_poster({{$program_poster->id}})" class="btn btn-danger">Cancel</a>
                                        @elseif($program_poster->status == 2)

                                        @elseif($program_poster->status == 3)

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
        });
    </script>
@stop
