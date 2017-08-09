<?php
/**
 * Created by PhpStorm.
 * Author: Wai Yan Aung
 * Date: 7/25/2016
 * Time: 11:46 AM
 */
?>

@extends('layouts.master')
@section('title','Import')
@section('content')

        <!-- begin #content -->
<div id="content" class="content">
    <style>
        .fileUpload {
            position: relative;
            overflow: hidden;
            margin: 10px;
        }
        .fileUpload input.upload {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
    </style>

    @if(count(Session::get('message')) != 0)
        <div>
        </div>
    @endif

    <h1 class="page-header">
        Excel Import Sample
    </h1>

    {!! Form::open(array('url' => 'backend/sample/excelImport', 'class'=> 'form-horizontal user-form-border','files' => true , 'id' => 'importForm')) !!}

    <br/>


    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <label for="table_name" class="text_bold_black">Table Name<span class="require">*</span></label>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <select class="form-control" id="table_name" name="table_name">
                <option selected disabled>Select Table Name</option>
                <option value="tests">Tests</option>

            </select>
            <p class="text-danger">{{$errors->first('table_name')}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <label for="csv" class="text_bold_black">File<span class="require">*</span></label>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            {{--<input id="csv_file" type="file" name="csv_file" />--}}
            {{--<p class="text-danger">{{$errors->first('csv_file')}}</p>--}}
            <div class="fileUpload btn btn-primary">
                <span>Choose</span>
                <input type="file" class="upload" id="import_file" name="import_file"/>
            </div>
            <p class="text-danger">{{$errors->first('import_file')}}</p>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
            <input type="submit" name="submit" value="ADD" class="form-control btn-primary">
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
            <input type="reset" value="CANCEL" class="form-control cancel_btn" onclick="">
        </div>
    </div>
    {!! Form::close() !!}
</div>
@stop

@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#importForm').validate({
                rules: {
                    table_name: 'required',
                    import_file : {
                        required: true,
                    }
                },
                messages: {
                    table_name: 'Table Name is required!',
                    import_file : {
                        required: 'File is required!',
                    }
                },
                submitHandler: function(form) {
                    $('input[type="submit"]').attr('disabled','disabled');
                    form.submit();
                }
            });
        });
    </script>
@stop