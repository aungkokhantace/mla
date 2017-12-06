@extends('layouts.master_frontend')
@section('title','Program Call')
@section('content')
@include('layouts.partial.nav_program')
        @if(Session::has('message'))
            <div class="col-md-8 well">
                {{Session::get('message')['body']}}
            </div>
        @endif

        <!-- Content Column -->
        <div class="col-md-9">
             <h2>PROGRAM >> CALL FOR PAPERS</h2>

                <h4>Theme:</h4>
                <p><b><i>“Next Generation Libraries: Collaborate and Connect”</i></b></p>
                <p>
                    In keeping with the theme of the CONSAL XVII, <b><i>“Next Generation Libraries: Collaborate and Connect”</i></b>, the Organizing Committee of CONSAL XVII invites papers for the General Conference.</p><p> Open Session will focus on how libraries across our region are dealing with challenges to their traditional ways of working, and experimenting with new ways to continue serving the people of their diverse communities, whether in densely populated cities, remote rural communities, or in scattered island communities.</p><p> We are seeking high-quality, thoughtful and inspiring papers, and we encourage professionals across the Asia-Pacific region to submit proposals for papers on topics relating to the session theme.
                </p>
                <h4>Topics:</h4>
                <ul>
                    <li>Access and Opportunities for all</li>
                    <li>Advocacy (Includes Discussions on Library Associations)</li>
                    <li>Digital Library Management</li>
                    <li>Transforming Libraries</li>
                    <li>New competencies and training for Library and Information Professionals</li>
                    <li>Marketing and Promotion</li>
                    <li>Conservation and Preservation (includes our ancient manuscripts)</li>
                    <li>ASEAN Vision and Libraries to include collaboration/ educational efforts</li>
                    <li>Media and Information literacy (to include media and social media literacy)</li>
                    <li>Strategic Alliances & Partnership</li>
                </ul>
                <p>
                    Members of CONSAL are welcome to propose papers demonstrating how work in their professional field could be applied across the Asia-Oceania region, provided that there is a clear link with the theme of our parallel sessions.</p>

                <h4>Submissions:</h4>
                <ol>
                <li>The deadline for submitting a detailed abstract (500 words) and full author details is <b>30 November 2017.</b></li>
                <li>Selection of papers is based on the abstract, and presenters will be notified whether they have been successful by <b>31 December 2017</b>. The committee will evaluate the submitted abstracts against criteria which include: innovative content, topical relevance, regional interest, clarity of exposition, originality, and overall quality</li>
                <li>Papers must be original submissions not presented or published elsewhere.</li>
                <li>Full texts of papers are due on <b>31 January 2018</b>. Both abstracts and full papers should be submitted as a MS Word file by e-mail.</li>
                <li>Papers should be no more than 4,000 words, single spaced in Times New Roman 12 point.</li>
                <li>Papers and abstracts should be in English.</li>
                <li>The author(s) should include their full contact details and brief biographical notes.</li>
                </ol>

                <h4>Content of abstracts:</h4>
                <p>Informative abstracts (500 words) should be prepared following the template provided below. Each
                    abstract will be reviewed by members of the peer review committee. <b>Abbreviated abstracts or late
                    submissions will not be considered.</b></p>

                <!-- <h4>Purpose of this paper</h4>
                <p>What are the reason(s) for writing the paper (or the aims of the research)?</p>
                <h4>Theme</h4>
                How does it relate to the theme of the session?
                Design, methodology, approach
                How are the objectives achieved? Include the main method(s) used for the study.What is the approach to the topic, and what is the theoretical or subject scope of the paper?
                Findings
                What was found in the course of the work? This will refer to analysis, discussion, or results.
                Research limitations and implications (if applicable)
                If the paper reports on research, this section must be completed. It should include suggestions for future research and any identified limitations in the research process.
                Practical implications (if applicable)
                What outcomes and implications for practice, applications and consequences are identified? All papers should have practical applications. What changes to practice might be made as a result of this research/paper?

                <h4>Originality</h4>
                <p>What is new in the paper? State the value of the paper and to whom.</p> -->
                <table class="table">
                <tr>
                    <td><i>Purpose of this paper<i></td>
                    <td>What are the reason(s) for writing the paper (or the aims of the research)?</td>
                </tr>
                <tr>
                    <td><i>Theme<i></td>
                    <td>How does it relate to the theme of the session?</td>
                </tr>
                <tr>
                    <td><i>Design, methodology, approach<i></td>
                    <td>How are the objectives achieved? Include the main method(s) used for the study. What is the approach to the topic, and what is the theoretical or subject scope of the paper?</td>
                </tr>
                <tr>
                    <td><i>Findings<i></td>
                    <td>What was found in the course of the work? This will refer to analysis, discussion, or results.</td>
                </tr>
                <tr>
                    <td><i>Research limitations and implications (if applicable)<i></td>
                    <td>If the paper reports on research, this section must be completed. It should include suggestions for future research and any identified limitations in the research process.</td>
                </tr>
                <tr>
                    <td><i>Practical implications (if applicable)<i></td>
                    <td>What outcomes and implications for practice, applications and consequences are identified? All papers should have practical applications. What changes to practice might be made as a result of this research/paper?</td>
                </tr>
                <tr>
                    <td><i>Originality<i></td>
                    <td>What is new in the paper? State the value of the paper and to whom.</td>
                </tr>
                </table>
                <hr>

                <h4>Presentation of accepted papers:</h4>
                <ol>
                <li>The presenter (who need not be the author) must be fluent in English: there will be no interpretation service at this open session.</li>
                <li>15 minutes will be allowed in the session for a summary presentation based on the paper, with time for questions. Presenters should not read their full written paper.</li>
                </ol>
                <p><b>Note:</b> in general, CONSAL has no funds available to cover the cost of speakers’ attendance at the Congress. Any person submitting a paper proposal to CONSAL XVII is responsible for arranging his/her own travel funding. </p>

                <h4>Deadline:</h4>
                <p>Please send your abstract <b>by Saturday 30 November 2017</b> to: <a href="http://paper@consalxvii.org">paper@consalxvii.org</a></p>

                <br>
                <form class="form-horizontal call_for_paper" method="post" action="{{url('program_call/store')}}" id="frm_program_call">
                    {{csrf_field()}}
                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="title">Title</label>
                            <div class="col-md-4">
                                <input id="title" name="title" type="text" placeholder="Enter Title" class="form-control input-md">
                                <p class="text-danger">{{$errors->first('title')}}</p>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="first_author">1st Author Affiliation</label>
                            <div class="col-md-4">
                                <input id="first_author" name="first_author" type="text" placeholder="Enter 1st Author Affiliation" class="form-control input-md">
                                <p class="text-danger">{{$errors->first('first_author')}}</p>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email</label>
                            <div class="col-md-4">
                                <input id="email" name="email" type="email" placeholder="Enter Email" class="form-control input-md">
                                <p class="text-danger">{{$errors->first('email')}}</p>
                            </div>
                        </div>

                        <!-- Address-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="title">Address</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
                                <p class="text-danger">{{$errors->first('address')}}</p>
                            </div>
                        </div>

                        <!-- 2nd Author-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="second_author">2nd Author</label>
                            <div class="col-md-4">
                                <input id="second_author" name="second_author" type="text" placeholder="Enter 2nd Author" class="form-control input-md">
                                <p class="text-danger">{{$errors->first('second_author')}}</p>
                            </div>
                        </div>

                        <!-- 3rd Author-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="third_author">3rd Author</label>
                            <div class="col-md-4">
                                <input id="third_author" name="third_author" type="text" placeholder="Enter 3rd Author" class="form-control input-md">
                                <p class="text-danger">{{$errors->first('third_author')}}</p>
                            </div>
                        </div>

                        <!-- Abstract -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="abstract">Abstract</label>
                            <div class="col-md-6">
                                <textarea class="form-control abstract-textbox" id="abstract" name="abstract" placeholder="Enter Abstract"></textarea>
                                <p class="text-danger">{{$errors->first('abstract')}}</p>
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

            var title = $("#title").val();
            if (title == "") {
                valid = false;
            }

            var first_author = $("#first_author").val();
            if (first_author == "") {
                valid = false;
            }

            var address = $("#address").val();
            if (address == "") {
                valid = false;
            }

            var second_author = $("#second_author").val();
            if (second_author == "") {
                valid = false;
            }

            var third_author = $("#third_author").val();
            if (third_author == "") {
                valid = false;
            }

            var email = $("#email").val();
            if (email == "") {
                valid = false;
            }

            var abstract = $("#abstract").val();
            if (abstract == "") {
                valid = false;
            }

            if (valid == true) {
                add_confirm_setup('program_call');
            }
        }

        $(document).ready(function() {

            $('#frm_program_call').validate({
                rules: {
                    title:'required',
                    first_author:'required',
                    email:{required:true,email:true},
                    address:'required',
                    second_author: 'required',
                    third_author:'required',
                    abstract:'required'
                },
                messages: {
                    title:'Title is required',
                    first_author:'1st Author Affiliation is required',
                    email:{required:'Email is required',email:'Please input email format.'},
                    address:'Address is required',
                    second_author: '2nd Author is required',
                    third_author:'3rd Author is required',
                    abstract:'Abstract is required'
                },
               /* submitHandler: function (form) {
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    form.submit();
                }*/
            });
            $('#btn').on('click', function() {
                $("#frm_program_call").valid();
            });
        });
    </script>
@endsection
