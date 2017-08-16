@extends('layouts.master')
@section('title','Latest New')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">{{isset($latest_new)? 'Edit Latest New' : 'Latest New Entry'}}</h1>
        @if(isset($latest_new))
            {!! Form::open(array('url' => 'backend/latest_new/update', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'latest_new_form')) !!}
            @else
            {!! Form::open(array('url' => 'backend/latest_new/store', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'latest_new_form')) !!}
            @endif
        <input type="hidden" name="id" value="{{isset($latest_new)? $latest_new->id:''}}"/>
        {{csrf_field()}}
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <label for="name">Latest New Name<span class="require">*</span></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" id="name" name="name" value="{{isset($latest_new)?$latest_new->name:Request::old('name')}}" placeholder="Enter Latest New Name"/>
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <label for="name">Description<span class="require">*</span></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" id="description" name="description" value="{{isset($latest_new)?$latest_new->description:Request::old('description')}}" placeholder="Enter Description"/>
                        <p class="text-danger">{{$errors->first('description')}}</p>
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
                        <input type="submit" name="submit" value="{{isset($latest_new)? 'UPDATE' : 'Publish'}}" class="form-control btn-primary">
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <input type="button" value="CANCEL" class="form-control cancel_btn" onclick="cancel_setup('latest_new')">
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
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
