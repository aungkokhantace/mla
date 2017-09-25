<!-- Page Content -->
<div class="container">

    <div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="list-group">
                @if(strpos(url()->current(),'/search') !== false)
                    <a href="#" class="list-group-item active-sub active">Search Results</a>
                @else
                    <a href="#" class="list-group-item active-sub">Search Results</a>
                @endif                
            </div>
    </div>