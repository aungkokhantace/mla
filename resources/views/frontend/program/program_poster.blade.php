@extends('layouts.master_frontend')
@section('title','Program Poster')
@section('content')
@include('layouts.partial.nav_program')

        <!-- Content Column -->
        <div class="col-md-9">
            <h2>PROGRAM >> POSTER SESSIONS</h2>
            @if(Session::has('message'))
                <div class="col-md-8 well bg-success">
                    {{Session::get('message')['body']}}
                </div>
            @endif
            <div class="col-md-9 poster" id="poster">
                <form class="form-horizontal" method="post" action="{{url('program_poster/store')}}" id="pro_poster_form">
                    {{csrf_field()}}
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address">Address</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="address" name="address"></textarea>
                                <p class="text-danger">{{$errors->first('address')}}</p>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email</label>
                            <div class="col-md-4">
                                <input id="email" name="email" type="email" placeholder="" class="form-control input-md">
                                <p class="text-danger">{{$errors->first('email')}}</p>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="description">Description</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="description" name="description"></textarea>
                                <p class="text-danger">{{$errors->first('description')}}</p>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="title">Title</label>
                            <div class="col-md-4">
                                <input id="title" name="title" type="text" placeholder="" class="form-control input-md">
                                <p class="text-danger">{{$errors->first('title')}}</p>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="author_affilliation">Author Affiliation</label>
                            <div class="col-md-4">
                                <input id="author" name="author" type="text" placeholder="" class="form-control input-md">
                                <p class="text-danger">{{$errors->first('author')}}</p>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="submit"></label>
                            <div class="col-md-4">
                                <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>

        </div>
    </div>
    <!-- /.row -->
</div>

@stop
@section('page_script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#pro_poster_form').validate({
                rules: {
                    address:'required',
                    email:{required:true,email:true},
                    description:'required',
                    title: 'required',
                    author:'required',
                },
                messages: {
                    address:'Address is required',
                    email:{required:'Email is required',email:'Please input email format.'},
                    description:'Description is required',
                    title: 'Title is required',
                    author:'Author affiliation is required',
                },
                submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }
            });
        });
    </script>
@endsection
