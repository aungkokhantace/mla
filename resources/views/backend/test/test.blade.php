<?php
/**
 * Created by PhpStorm.
 * Author: Wai Yan Aung
 * Date: 7/25/2016
 * Time: 11:46 AM
 */
?>

@extends('layouts.master')
@section('title','Test')
@section('content')

        <!-- begin #content -->
<div id="content" class="content">
    <h1 class="page-header">{{isset($test) ?  'Test Edit' : 'Test Entry' }}</h1>


    @if(isset($test))
        {!! Form::open(array('url' => 'backend/test/update', 'class'=> 'form-horizontal user-form-border', 'files' => true , 'id' => 'postForm')) !!}
    @else
        {!! Form::open(array('url' => 'backend/test/store', 'class'=> 'form-horizontal user-form-border', 'files' => true , 'id' => 'postForm')) !!}
    @endif
    <input type="hidden" name="id" value="{{isset($test)? $test->id:''}}"/>
    <br/>

    <br/>

    <div class="box-body">

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <label for="description">Content</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <input type="text" class="form-control" id="test_content" name="test_content" placeholder="Enter Test Content" value="{{ isset($test)? $test->content:Request::old('content') }}"/>
                <p class="text-danger">{{$errors->first('test_content')}}</p>
            </div>
        </div>        

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <input type="submit" name="submit" value="{{isset($post)? 'UPDATE' : 'PUBLISH'}}" class="form-control btn-primary">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <input type="button" value="CANCEL" class="form-control cancel_btn" onclick="cancel_setup('post')">
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    @stop

    @section('page_script')
        <script type="text/javascript">
            $(document).ready(function() {

                $('#postForm').validate({
                    rules: {
                        name: 'required',
                        url : 'required',
                        title: 'required',
                        post_order: 'required',
                        pages_id: 'required'
                    },
                    messages: {
                        name: 'Post Name is required',
                        url : 'URL is required',
                        title: 'Post Title is required',
                        post_order: 'Post Order is required',
                        pages_id: 'Page is required'
                    },
                    submitHandler: function(form) {
                        $('input[type="submit"]').attr('disabled','disabled');
                        form.submit();
                    }
                });

//                $('#post_content').summernote({
//                    height:300
//                });

                $('#test_content').summernote({
                    height:300,
                    toolbar: [
                        // [groupName, [list of button]]
                        ['style', ['style']],
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['picture', ['picture']],
                        ['link', ['link']],
                        ['table', ['table']],
                        ['hr', ['hr']],
                        ['codeview', ['codeview']],
                        ['undo', ['undo']],
                        ['redo', ['redo']],
//                        ['help', ['help']],
                    ]
                });

                // //For checkbox picker
                // $(':checkbox').checkboxpicker();
            });
        </script>
@stop