@extends('layouts.master')
@section('title','Image Gallery')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">{{isset($image_gallery)? 'Edit Image' : 'Image Entry'}}</h1>
        @if(isset($image_gallery))
            {!! Form::open(array('url' => 'backend/image_gallery/update', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'image_gallery_form')) !!}
            @else
            {!! Form::open(array('url' => 'backend/image_gallery/store', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'image_gallery_form')) !!}
            @endif
        <input type="hidden" name="id" value="{{isset($image_gallery)? $image_gallery->id:''}}"/>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Image Name<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="text" class="form-control" id="name" name="name" value="{{isset($image_gallery)?$image_gallery->name:Request::old('name')}}" placeholder="Enter Image Name"/>
                    <p class="text-danger">{{$errors->first('name')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Select Image<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="file" class="form-control" id="path" name="path"/>
                    <p class="text-danger">{{$errors->first('path')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="submit" name="submit" value="{{isset($image_gallery)? 'UPDATE' : 'UPLOAD'}}" class="form-control btn-primary">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="button" value="CANCEL" class="form-control cancel_btn" onclick="cancel_setup('image_gallery')">
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    @stop
@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#image_gallery_form').validate({
                rules: {
                    name: 'required',
                    path: 'required'
                },
                messages: {
                    name: 'Name is required',
                    path: 'Image is required'
                },
                submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }
            });
        });
    </script>
@stop
