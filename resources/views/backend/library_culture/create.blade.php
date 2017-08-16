@extends('layouts.master')
@section('title','Library Culture')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">{{isset($library_culture)? 'Edit Library and Culture visit' : 'Library and Culture visit Entry'}}</h1>
        @if(isset($library_culture))
            {!! Form::open(array('url' => 'backend/library_culture/update', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'library_culture_form')) !!}
        @else
            {!! Form::open(array('url' => 'backend/library_culture/store', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'library_culture_form')) !!}
        @endif
        <input type="hidden" name="id" value="{{isset($library_culture)? $library_culture->id:''}}"/>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Name<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="text" class="form-control" id="name" name="name" value="{{isset($library_culture)?$library_culture->name:Request::old('name')}}" placeholder="Enter Image Name"/>
                    <p class="text-danger">{{$errors->first('name')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Select Image<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="file" class="form-control" id="image" name="image"/>
                    <p class="text-danger">{{$errors->first('path')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="submit" name="submit" value="{{isset($library_culture)? 'UPDATE' : 'UPLOAD'}}" class="form-control btn-primary">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="button" value="CANCEL" class="form-control cancel_btn" onclick="cancel_setup('library_culture')">
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop
@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#library_culture_form').validate({
                rules: {
                    name: 'required',
                    image: 'required'
                },
                messages: {
                    name: 'Name is required',
                    image: 'Image is required'
                },
                submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }
            });
        });
    </script>
@stop
