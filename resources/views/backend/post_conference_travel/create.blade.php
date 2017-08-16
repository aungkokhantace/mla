@extends('layouts.master')
@section('title','Post Conference Travel')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">{{isset($post_conference_travel)? 'Edit' : 'Post Conference Travel Entry'}}</h1>
        @if(isset($post_conference_travel))
            {!! Form::open(array('url' => 'backend/post_conference_travel/update', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'post_conference_travel_form')) !!}
        @else
            {!! Form::open(array('url' => 'backend/post_conference_travel/store', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'post_conference_travel_form')) !!}
        @endif
        <input type="hidden" name="id" value="{{isset($post_conference_travel)? $post_conference_travel->id:''}}"/>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Name<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="text" class="form-control" id="name" name="name" value="{{isset($post_conference_travel)?$post_conference_travel->name:Request::old('name')}}" placeholder="Enter Image Name"/>
                    <p class="text-danger">{{$errors->first('name')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Select Image<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="file" class="form-control" id="image" name="image"/>
                    <p class="text-danger">{{$errors->first('image')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="submit" name="submit" value="{{isset($post_conference_travel)? 'UPDATE' : 'UPLOAD'}}" class="form-control btn-primary">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="button" value="CANCEL" class="form-control cancel_btn" onclick="cancel_setup('post_conference_travel')">
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    @stop
@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#post_conference_travel_form').validate({
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