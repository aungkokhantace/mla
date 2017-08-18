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
                <form class="form-horizontal" method="post" action="{{url('program_poster/store')}}" id="frm_program_poster">
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
                                <button type="button" id="btn" class="btn btn-primary" onclick="pre_add_confirm_setup()">SUBMIT</button>
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
        function pre_add_confirm_setup() {

            var valid = true;

            var author = $("#author").val();
            if (author == "") {
                valid = false;
            }

            var address = $("#address").val();
            if (address == "") {
                valid = false;
            }

            var title = $("#title").val();
            if (title == "") {
                valid = false;
            }

            var description = $("#description").val();
            if (description == "") {
                valid = false;
            }

            var email = $("#email").val();
            if (email == "") {
                valid = false;
            }


            if (valid == true) {
                add_confirm_setup('program_poster');
            }
        }

        $(document).ready(function() {

            $('#frm_program_poster').validate({
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
                /*submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }*/
            });
            $('#btn').on('click', function() {
                $("#frm_program_poster").valid();
            });
        });
    </script>
@endsection
