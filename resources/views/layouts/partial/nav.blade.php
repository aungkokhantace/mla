<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar nav -->
        <ul class="nav">
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
            <li class="nav-header">Registrations</li>
            <li nav-id='report'  class="has-sub" >
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-table"></i>
                    <span>Reports</span>
                </a>

                <ul class="sub-menu">
                    <li nav-id="report-sale-summary"><a href="/backend/report/conference_registration/">Report Conference Registration</a></li>
                    <li nav-id="report-sale-summary"><a href="/backend/report/exhibitor/">Report Exhibitor & Sponsor</a></li>
                    <li nav-id="report-sale-summary"><a href="/backend/report/program_call/">Report Program Call</a></li>
                    <li nav-id="report-sale-summary"><a href="/backend/report/program_poster/">Report Program Poster</a></li>
                </ul>
            </li>
            <li nav-id='report'  class="has-sub" >
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-table"></i>
                    <span>Conference Registration</span>
                </a>
                <ul class="sub-menu">
                    <li nav-id="report-sale-summary"><a href="/backend/conference_registration/">List</a></li>
                </ul>
            </li>
            <li nav-id='report'  class="has-sub" >
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-table"></i>
                    <span>Exhibitor & Sponsor</span>
                </a>

                <ul class="sub-menu">
                    <li nav-id="report-sale-summary"><a href="/backend/exhibitor/">List</a></li>
                </ul>
            </li>
            <li nav-id='report'  class="has-sub" >
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-table"></i>
                    <span>Program</span>
                </a>
                <ul class="sub-menu">
                    <li nav-id="modifier-create-modifier"><a href="/backend/program_call">Program Call List</a></li>
                    <li nav-id="modifier-create-modifierpanel"><a href="/backend/program_poster">Program Poster List</a></li>

                </ul>
            </li>
            <li class="nav-header">Backend</li>
            <li nav-id='report'  class="has-sub" >
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-cog"></i>
                    <span>Setup</span>
                </a>

                <ul class="sub-menu">
                     @if(Auth::guard('User')->user()->role_id == '1')
                    <li nav-id="modifier-create" class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Page</span>
                        </a>

                        <ul class="sub-menu">
                            <!-- <li nav-id="modifier-create-modifier"><a href="/backend/page/create">Entry</a></li> -->
                            <li nav-id="modifier-create-modifierpanel"><a href="/backend/page">List</a></li>
                        </ul>
                    </li>
                    @endif

                    @if(Auth::guard('User')->user()->role_id == '1' || Auth::guard('User')->user()->role_id == '2')
                    <li nav-id="modifier-create" class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Post</span>
                        </a>
                        <ul class="sub-menu">
                            <li nav-id="modifier-create-modifier"><a href="/backend/post/create">Entry</a></li>
                            <li nav-id="modifier-create-modifierpanel"><a href="/backend/post">List</a></li>
                        </ul>
                    </li>
                    @endif
                         @if(Auth::guard('User')->user()->role_id == '1' || Auth::guard('User')->user()->role_id == '2')
                             <li nav-id="modifier-create" class="has-sub">
                                 <a href="javascript:;">
                                     <b class="caret pull-right"></b>
                                     <span>News</span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li nav-id="modifier-create-modifier"><a href="/backend/latest_new/create">Entry</a></li>
                                     <li nav-id="modifier-create-modifierpanel"><a href="/backend/latest_new">List</a></li>
                                 </ul>
                             </li>
                         @endif
                         @if(Auth::guard('User')->user()->role_id == '1' || Auth::guard('User')->user()->role_id == '2')
                             <li nav-id="modifier-create" class="has-sub">
                                 <a href="javascript:;">
                                     <b class="caret pull-right"></b>
                                     <span>Image Gallery</span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li nav-id="modifier-create-modifier"><a href="/backend/image_gallery/create">Entry</a></li>
                                     <li nav-id="modifier-create-modifierpanel"><a href="/backend/image_gallery">List</a></li>
                                 </ul>
                             </li>
                         @endif
                         @if(Auth::guard('User')->user()->role_id == '1' || Auth::guard('User')->user()->role_id == '2')
                             <li nav-id="modifier-create" class="has-sub">
                                 <a href="javascript:;">
                                     <b class="caret pull-right"></b>
                                     <span>Post Conference Travel</span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li nav-id="modifier-create-modifier"><a href="/backend/post_conference_travel/create">Entry</a></li>
                                     <li nav-id="modifier-create-modifierpanel"><a href="/backend/post_conference_travel">List</a></li>
                                 </ul>
                             </li>
                         @endif
                         @if(Auth::guard('User')->user()->role_id == '1' || Auth::guard('User')->user()->role_id == '2')
                             <li nav-id="modifier-create" class="has-sub">
                                 <a href="javascript:;">
                                     <b class="caret pull-right"></b>
                                     <span>Library & Culture Visit</span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li nav-id="modifier-create-modifier"><a href="/backend/library_culture/create">Entry</a></li>
                                     <li nav-id="modifier-create-modifierpanel"><a href="/backend/library_culture">List</a></li>
                                 </ul>
                             </li>
                         @endif
                         @if(Auth::guard('User')->user()->role_id == '1' || Auth::guard('User')->user()->role_id == '2')
                             <li nav-id="modifier-create" class="has-sub">
                                 <a href="javascript:;">
                                     <b class="caret pull-right"></b>
                                     <span>Accommodation</span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li nav-id="modifier-create-modifier"><a href="/backend/accommodation/create">Entry</a></li>
                                     <li nav-id="modifier-create-modifierpanel"><a href="/backend/accommodation">List</a></li>
                                 </ul>
                             </li>
                         @endif
                         @if(Auth::guard('User')->user()->role_id == '1' || Auth::guard('User')->user()->role_id == '2')
                             <li nav-id="modifier-create" class="has-sub">
                                 <a href="javascript:;">
                                     <b class="caret pull-right"></b>
                                     <span>Event Email</span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li nav-id="modifier-create-modifier"><a href="/backend/eventemail/create">Entry</a></li>
                                     <li nav-id="modifier-create-modifierpanel"><a href="/backend/eventemail">List</a></li>
                                 </ul>
                             </li>
                         @endif

                         @if(Auth::guard('User')->user()->role_id == '1' || Auth::guard('User')->user()->role_id == '2')
                             <li nav-id="modifier-create" class="has-sub">
                                 <a href="javascript:;">
                                     <b class="caret pull-right"></b>
                                     <span>Registration Category</span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li nav-id="modifier-create-modifier"><a href="/backend/registrationcategory/create">Entry</a></li>
                                     <li nav-id="modifier-create-modifierpanel"><a href="/backend/registrationcategory">List</a></li>
                                 </ul>
                             </li>
                         @endif
                </ul>
            </li>


            <li class="nav-header">AcePlus Backend</li>

            <li  nav-id='modifier'  class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Site Setup</span>
                </a>
                <ul class="sub-menu">
                @if(Auth::guard('User')->user()->role_id == '1')
                    <li nav-id="modifier-manage" class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Role</span>
                        </a>

                        <ul class="sub-menu">
                            <li nav-id="modifier-manage-modifier"><a href="/backend/role/create">Entry</a></li>
                            <li nav-id="modifier-manage-modifierpanel"><a href="/backend/role">List</a></li>
                        </ul>
                    </li>
                @endif

                @if(Auth::guard('User')->user()->role_id == '1')
                    <li nav-id="modifier-manage" class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Permission</span>
                        </a>

                        <ul class="sub-menu">
                            <li nav-id="modifier-manage-modifier"><a href="/backend/permission/create">Entry</a></li>
                            <li nav-id="modifier-manage-modifierpanel"><a href="/backend/permission">List</a></li>

                        </ul>
                    </li>
                @endif
                    <li nav-id="modifier-create" class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Staff</span>
                        </a>

                        <ul class="sub-menu">
                            <li nav-id="modifier-create-modifier"><a href="/backend/user/create">Entry</a></li>
                            <li nav-id="modifier-create-modifierpanel"><a href="/backend/user">List</a></li>
                        </ul>
                    </li>
                    <li nav-id="">
                        <a href="/backend/config">
                            <b class="caret pull-right"></b>
                            <span>Site Config</span>
                        </a>
                    </li>

                    @if(Auth::guard('User')->user()->role_id == '1')
                    <li nav-id="modifier-manage" class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Test</span>
                        </a>

                        <ul class="sub-menu">
                            <li nav-id="modifier-manage-modifier"><a href="/backend/test/create">Entry</a></li>
                            <li nav-id="modifier-manage-modifierpanel"><a href="/backend/test">List</a></li>

                        </ul>
                    </li>
                    @endif
                </ul>
            </li>

            <!-- <li  nav-id='modifier'  class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    {{--<i class="fa fa-users"></i>--}}
                    <i class="fa fa-empire"></i>
                    <span>Area</span>
                </a>
                <ul class="sub-menu">
                    <li nav-id="modifier-manage" class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Country</span>
                        </a>

                        <ul class="sub-menu">
                            <li nav-id="modifier-manage-modifier"><a href="/backend/country/create">Entry</a></li>
                            <li nav-id="modifier-manage-modifierpanel"><a href="/backend/country">List</a></li>
                        </ul>
                    </li>
                    <li nav-id="modifier-manage" class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>City</span>
                        </a>

                        <ul class="sub-menu">
                            <li nav-id="modifier-manage-modifier"><a href="/backend/city/create">Entry</a></li>
                            <li nav-id="modifier-manage-modifierpanel"><a href="/backend/city">List</a></li>

                        </ul>
                    </li>
                    <li nav-id="modifier-create" class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Township</span>
                        </a>

                        <ul class="sub-menu">
                            <li nav-id="modifier-create-modifier"><a href="/backend/township/create">Entry</a></li>
                            <li nav-id="modifier-create-modifierpanel"><a href="/backend/township">List</a></li>
                        </ul>
                    </li>
                </ul>
            </li> -->

            @if(Auth::guard('User')->user()->role_id == '1')
            <li nav-id="">
                <a href="/backend/system_reference">
                    <!-- <b class="caret pull-right"></b> -->
                    <span>System Reference</span>
                </a>
            </li>
            @endif
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>    <!-- end #sidebar -->
