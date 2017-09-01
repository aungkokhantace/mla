<div class="container">

        <div class="row">
        <div class="col-md-3">
                <div class="list-group">
                    @if(url()->current() == asset('/travel'))
                    <a href="/travel" class="list-group-item active-sub active">Post-conference Travel</a>
                    @else
                    <a href="/travel" class="list-group-item active-sub">Post-conference Travel</a>
                    @endif

                    @if(url()->current() == asset('/travel_accommodation'))
                    <a href="/travel_accommodation" class="list-group-item active">Accommodations</a>
                    @else
                    <a href="/travel_accommodation" class="list-group-item">Accommodations</a>
                    @endif
                </div>
            </div>