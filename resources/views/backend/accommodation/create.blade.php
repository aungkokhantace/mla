@extends('layouts.master')
@section('title','Accommodation')
@section('content')
    <div id="content" class="content">
        <h1 class="page-header">{{isset($accommodation)? 'Edit Accommodation' : 'Accommodation Entry'}}</h1>
        @if(isset($accommodation))
            {!! Form::open(array('url' => 'backend/accommodation/update', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'accommodation_form')) !!}
        @else
            {!! Form::open(array('url' => 'backend/accommodation/store', 'class'=> 'form-horizontal user-form-border','files' => true,'id'=>'accommodation_form')) !!}
        @endif
        <input type="hidden" name="id" value="{{isset($accommodation)? $accommodation->id:''}}"/>
        {{csrf_field()}}
        <div class="box-body">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Accommodation Name<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="text" class="form-control" id="name" name="name" value="{{isset($accommodation)?$accommodation->name:Request::old('name')}}" placeholder="Enter Accommodation Name"/>
                    <p class="text-danger">{{$errors->first('name')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Star Number<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <input type="number" class="form-control" id="stars" name="stars" value="{{isset($accommodation)?$accommodation->stars:Request::old('stars')}}" placeholder="Enter Star Number" min="1" max="5"/>
                    <p class="text-danger">{{$errors->first('stars')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="name">Description<span class="require">*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <textarea name="description" id="description" cols="145" rows="15">{{isset($accommodation)?$accommodation->description:Request::old('description')}}</textarea>
                    {{--<input type="text" class="form-control" id="description" name="description" value="{{isset($accommodation)?$accommodation->description:Request::old('description')}}" placeholder="Enter Description"/>--}}
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
                    <input type="submit" name="submit" value="{{isset($latest_new)? 'UPDATE' : 'PUBLISH'}}" class="form-control btn-primary">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="button" value="CANCEL" class="form-control cancel_btn" onclick="cancel_setup('accommodation')">
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop
@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#accommodation_form').validate({
                rules: {
                    name:'required',
                    stars:{required:true,range:[1,5]},
                    description: 'required',
                    image:'required'
                },
                messages: {
                    name: 'Description is required',
                    stars: {required:'Number of star need to fill',range:'U can only fill between 1 to 5'},
                    description: 'Description is required',
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
