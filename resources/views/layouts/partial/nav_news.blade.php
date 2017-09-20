<!-- Page Content -->
<div class="container">

    <div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="list-group">
                @if(strpos(url()->current(),'/news') !== false)
                <a href="/news_all" class="list-group-item active-sub active">News</a>
                @else
                <a href="/news_all" class="list-group-item active-sub">News</a>
                @endif                
            </div>
    </div>