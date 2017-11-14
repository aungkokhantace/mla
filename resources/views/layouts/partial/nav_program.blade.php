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

                    <!-- @if(url()->current() == asset('/program_pre_conference'))
                    <a href="#pre-conference-convening-sub" class="list-group-item active" id="pre-conference-convening-main" data-toggle="collapse" data-parent="#pre-conference-convening-sub">Pre-conference Convening</a>
                    @else
                    <a href="/program_pre_conference" class="list-group-item">Pre-conference Convening</a>
                    @endif -->

                    @if(url()->current() == asset('/program_pre_conference') || url()->current() == asset('/regional_school_library_workshop') || url()->current() == asset('/executive_board_meeting') || url()->current() == asset('/conference_of_directors'))
                    <a href="#pre-conference-convening-sub" class="list-group-item active" id="pre-conference-convening-main" data-toggle="collapse" data-parent="#pre-conference-convening-sub">Pre-conference Convening<i class="fa fa-caret-down" style="float:right;"></i></a>
                    @else
                    <a href="#pre-conference-convening-sub" class="list-group-item" id="pre-conference-convening-main" data-toggle="collapse" data-parent="#pre-conference-convening-sub">Pre-conference Convening<i class="fa fa-caret-down submenu-down-arrow"></i></a>
                    @endif

                    @if(url()->current() == asset('/program_pre_conference') || url()->current() == asset('/regional_school_library_workshop') || url()->current() == asset('/executive_board_meeting') || url()->current() == asset('/conference_of_directors'))
                    <div class="collapse in list-group-submenu" id="pre-conference-convening-sub">
                    @else
                    <div class="collapse list-group-submenu" id="pre-conference-convening-sub">
                    @endif

                    @if(url()->current() == asset('/regional_school_library_workshop'))
                        <a href="/regional_school_library_workshop" class="list-group-item sub-item active" data-parent="#pre-conference-convening-sub" style="padding-left: 25px;">4th Regional School Library Workshop</a>
                    @else
                        <a href="/regional_school_library_workshop" class="list-group-item sub-item" data-parent="#pre-conference-convening-sub" style="padding-left: 25px;">4th Regional School Library Workshop</a>
                    @endif

                    @if(url()->current() == asset('/executive_board_meeting'))
                        <a href="/executive_board_meeting" class="list-group-item sub-item active" data-parent="#pre-conference-convening-sub" style="padding-left: 25px;">3rd Executive Board Meeting of CONSAL XVII</a>
                    @else
                        <a href="/executive_board_meeting" class="list-group-item sub-item" data-parent="#pre-conference-convening-sub" style="padding-left: 25px;">3rd Executive Board Meeting of CONSAL XVII</a>
                    @endif

                    @if(url()->current() == asset('/conference_of_directors'))
                        <a href="/conference_of_directors" class="list-group-item sub-item active" data-parent="#pre-conference-convening-sub" style="padding-left: 25px;">26th Conference of Directors of National Libraries in Asia and Oceania</a>
                    @else
                        <a href="/conference_of_directors" class="list-group-item sub-item" data-parent="#pre-conference-convening-sub" style="padding-left: 25px;">26th Conference of Directors of National Libraries in Asia and Oceania</a>
                    @endif
                    </div>

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