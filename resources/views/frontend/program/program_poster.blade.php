@extends('layouts.master_frontend')
@section('title','Program Poster')
@section('content')
@include('layouts.partial.nav_program')
        @if(Session::has('message'))
            <div class="col-md-8 well bg-success">
                {{Session::get('message')['body']}}
            </div>
        @endif

        <!-- Content Column -->
        <div class="col-md-9">
            <h2>PROGRAM >> POSTER SESSIONS</h2>
              <h3>Poster Author Information and Instructions</h3>
              <p>
                By following the instructions and guidelines below, your poster presentation will be successful.
              </p>
              <h3>Poster Size and Layout </h3>
              <p>
                Each author will have a poster board portrait format, measuring <span class='red-text'>8'</span> wide x <span class='red-text'>3'3"</span> high.  The standard  poster  size is <span class='red-text'>2' 6"</span> x <span class='red-text'>3' 6"</span>.
              </p>
              <img src="/assets/frontend/images/standard_poster.png" class="center-image" />

              <h4>Poster Content</h4>
              <ol>
                <li>Title</li>
                <li>Author/s</li>
                <li>Author Affiliations</li>
                <li>Poster presentation</li>
                <li>Contact details</li>
              </ol>
              <br />
              <h4>Poster Schedule</h4>
              <ol>
                <li> <span class="red-text">31 January 2018</span>  - The deadline for submitting a detailed abstract (500 words) and full author details.</li>
                <li> <span class="red-text">28 February 2018</span>  - Selection of poster, based on the abstract.</li>
                <li> The committee will evaluate the submitted abstracts against criteria which include: innovative content, topical relevance, regional interest, clarity of exposition, originality, and overall quality and notify the presenters whether they have been successful.</li>
                <li> <span class="red-text">31 March 2018</span>  - Full poster due date</li>
                <li> <span class="red-text">2 May 2018</span>  - 10:00 – 11:00 am – The presenters place their posters on presentation panels at the Congress.</li>
                <li> <span class="red-text">2 May 2018</span>  - 2:00-4:00 pm – Poster Session I (Authors present to answer questions)</li>
                <li> <span class="red-text">3 May 2018</span>  - 2:00-4:00 pm – Poster Session II (Authors present to answer questions)</li>
                <li> All posters will be available for general viewing from 2 May – 4 May 2018.</li>
                <li> <span class="red-text">4 May 2018</span> – 2:00 – 4:00 pm – All authors will need to remove the posters from the panels.</li>
              </ol>

              <br />
              <h4>Poster Presentation Guidelines</h4>
              <ul>
                <li>Authors must put up and take down their posters according to the schedule above.</li>
                <li>Posters should remain on the boards for all three days.</li>
                <li>Audiovisual equipment is not permitted in the poster board area. </li>
                <li>Posters must be original submissions not presented or published elsewhere.</li>
                <li>The author must use the easily readable font sizes to be able to read from a distance.</li>
                <li>All poster boards will be pre-numbered. Please be sure to mount your poster on the correct board. </li>
                <li>Floor plans and poster attendants will be available in the Congress to help you find your poster board.</li>
                <li>Congress attendees may take photos of posters if the poster author agrees. Authors who do not want their posters to be photographed will have to indicate the sign at the top right corner of the posters.</li>
              </ul>
              <br />
              <p>For further  information or questions, please contact U Zaw Aung Htut by phone at +959420072130 or email <a href="http://posters@consalxvii.org">posters@consalxvii.org</a>.</p>
              <br />
              <form class="form-horizontal call_for_paper" method="post" action="{{url('program_poster/store')}}" id="frm_program_poster">
                  {{csrf_field()}}
                  <fieldset>
                      <!-- Text input-->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="title">Title</label>
                          <div class="col-md-4">
                              <input id="title" name="title" type="text" placeholder="Enter Title" class="form-control">
                              <p class="text-danger">{{$errors->first('title')}}</p>
                          </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="author">Author Affiliation</label>
                          <div class="col-md-4">
                              <input class="form-control" id="author" name="author" type="text" placeholder="Enter Author Affiliation">
                              <p class="text-danger">{{$errors->first('author')}}</p>
                          </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Email</label>
                          <div class="col-md-4">
                              <input id="email" name="email" type="email" placeholder="Enter Email" class="form-control input-md">
                              <p class="text-danger">{{$errors->first('email')}}</p>
                          </div>
                      </div>


                      <!-- Textarea -->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="address">Address</label>
                          <div class="col-md-4">
                              <textarea class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
                              <p class="text-danger">{{$errors->first('address')}}</p>
                          </div>
                      </div>

                      <!-- Textarea -->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="description">Description</label>
                          <div class="col-md-4">
                              <textarea class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
                              <p class="text-danger">{{$errors->first('description')}}</p>
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
