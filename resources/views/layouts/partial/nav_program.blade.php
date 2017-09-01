<!-- Page Content -->
    <div class="container">

        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    @if(url()->current() == asset('/program'))
                    <a href="/program" class="list-group-item active-sub active">Program Topics</a>
                    @else
                    <a href="/program" class="list-group-item active-sub">Program Topics</a>
                    @endif

                    @if(url()->current() == asset('/program_pre_conference'))
                    <a href="/program_pre_conference" class="list-group-item active">Pre-conference Convencing</a>
                    @else
                    <a href="/program_pre_conference" class="list-group-item">Pre-conference Convencing</a>
                    @endif

                    @if(url()->current() == asset('/program_conference'))
                    <a href="/program_conference" class="list-group-item active">Conference Program Overview</a>
                    @else
                    <a href="/program_conference" class="list-group-item">Conference Program Overview</a>
                    @endif

                    @if(url()->current() == asset('/program_call'))
                    <a href="/program_call" class="list-group-item active">Call for Papers</a>
                    @else
                    <a href="/program_call" class="list-group-item">Call for Papers</a>
                    @endif

                    @if(url()->current() == asset('/program_poster'))
                    <a href="/program_poster" class="list-group-item active">Poster Sessions</a>
                    @else
                    <a href="/program_poster" class="list-group-item">Poster Sessions</a>
                    @endif

                    @if(url()->current() == asset('/program_library'))
                    <a href="/program_library" class="list-group-item active">Library and Cultural Visits</a>
                    @else
                    <a href="/program_library" class="list-group-item">Library and Cultural Visits</a>
                    @endif
                    
                    <!-- <a href="/program_guideline" class="list-group-item">Guideline for the Authors and Presenters</a> -->
                </div>
            </div>