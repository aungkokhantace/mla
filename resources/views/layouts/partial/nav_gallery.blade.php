<!-- Page Content -->
<div class="container">

    <div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="list-group">
                @if(url()->current() == asset('/gallery'))
                <a href="/gallery" class="list-group-item active-sub active">Gallery</a>
                @else
                <a href="/gallery" class="list-group-item active-sub">Gallery</a>
                @endif
                
            </div>
    </div>