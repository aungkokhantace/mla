@extends('layouts.master')
@section('title','Township')
@section('content')

        <!-- begin #content -->
<div id="content" class="content">

    <h1 class="page-header">
        {{ isset($township) ?  'Township Edit' : 'Township Entry' }}
    </h1>

    {{--check new or edit--}}
    @if(isset($township))
        {!! Form::open(array('url' => '/backend/township/update', 'class'=> 'form-horizontal user-form-border', 'id'=>'township')) !!}

    @else
        {!! Form::open(array('url' => '/backend/township/store', 'class'=> 'form-horizontal user-form-border', 'id'=>'township')) !!}
    @endif
    <input type="hidden" name="id" value="{{isset($township)? $township->id:''}}"/>
    <br/>

    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <label for="country_id">City Name <span class="require">*</span></label>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <select class="form-control" name="city_id" id="city_id">
                @if(isset($township))
                    @foreach($cities as $city)
                        @if($city->id == $township->city_id)
                            <option value="{{$city->id}}" selected>{{$city->name}}</option>
                        @else
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endif
                    @endforeach
                @else
                    <option value="" disabled selected>Select City</option>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                @endif
            </select>
            <p class="text-danger">{{$errors->first('city_id')}}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <label for="user_name">Township Name<span class="require">*</span></label>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Township Name" value="{{ isset($township)? $township->name:Request::old('name') }}"/>
            <p class="text-danger">{{$errors->first('name')}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <input type="submit" name="submit" value="{{isset($township)? 'UPDATE' : 'ADD'}}" class="form-control btn-primary">
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <input type="button" value="CANCEL" class="form-control cancel_btn" onclick="cancel_setup('township')">
        </div>
    </div>
    {!! Form::close() !!}
</div>
@stop

@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {
            //Start Validation for Entry and Edit Form
            $('#township').validate({
                rules: {
                    name                  : 'required',
                    city_id               : 'required',
                },
                messages: {
                    name                  : 'Township Name is required',
                    city_id               : 'City is required',
                },
                submitHandler: function(form) {
                    $('input[type="submit"]').attr('disabled','disabled');
                    form.submit();
                }
            });
            //End Validation for Entry and Edit Form

            //For checkbox picker
            $(':checkbox').checkboxpicker();
        });
    </script>
@stop