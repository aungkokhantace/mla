<div class="container">

        <div class="row">
        <div class="col-md-3">
                <div class="list-group">
                    <!-- @if(url()->current() == asset('/travel'))
                    <a href="/travel" class="list-group-item active-sub active">Post-conference Travel</a>
                    @else
                    <a href="/travel" class="list-group-item active-sub">Post-conference Travel</a>
                    @endif -->

                    <!-- Start sub menu -->
                    @if(url()->current() == asset('/travel') || url()->current() == asset('/travel_other'))
                    <a href="#post-conference-travel-sub" class="list-group-item active" id="pre-conference-convening-main" data-toggle="collapse" data-parent="#post-conference-travel-sub">Post-conference Travel<i class="fa fa-caret-down" style="float:right;"></i></a>
                    @else
                    <a href="#post-conference-travel-sub" class="list-group-item" id="pre-conference-convening-main" data-toggle="collapse" data-parent="#post-conference-travel-sub">Post-conference Travel<i class="fa fa-caret-down submenu-down-arrow"></i></a>
                    @endif

                    @if(url()->current() == asset('/travel') || url()->current() == asset('/travel_other'))
                    <div class="collapse in list-group-submenu" id="post-conference-travel-sub">
                    @else
                    <div class="collapse list-group-submenu" id="post-conference-travel-sub">
                    @endif

                    @if(url()->current() == asset('/travel'))
                        <a href="/travel" class="list-group-item sub-item active" data-parent="#post-conference-travel-sub" style="padding-left: 25px;">Yangon</a>
                    @else
                        <a href="/travel" class="list-group-item sub-item" data-parent="#post-conference-travel-sub" style="padding-left: 25px;">Yangon</a>
                    @endif

                    @if(url()->current() == asset('/travel_other'))
                        <a href="/travel_other" class="list-group-item sub-item active" data-parent="#post-conference-travel-sub" style="padding-left: 25px;">Other Destinations</a>
                    @else
                        <a href="/travel_other" class="list-group-item sub-item" data-parent="#post-conference-travel-sub" style="padding-left: 25px;">Other Destinations</a>
                    @endif
                    </div>
                    <!-- End sub menu -->

                    @if(url()->current() == asset('/travel_accommodation'))
                    <a href="/travel_accommodation" class="list-group-item active">Accommodations</a>
                    @else
                    <a href="/travel_accommodation" class="list-group-item">Accommodations</a>
                    @endif
                </div>
            </div>
