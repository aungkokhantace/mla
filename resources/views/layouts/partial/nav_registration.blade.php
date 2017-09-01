<!-- Page Content-->
<div class="container">

        <div class="row">
        <div class="col-md-3">
                <div class="list-group">
                    @if(url()->current() == asset('/registration'))
                    <a href="/registration" class="list-group-item active-sub active">Conference Registration Form</a>
                    @else
                    <a href="/registration" class="list-group-item active-sub">Conference Registration Form</a>
                    @endif

                    @if(url()->current() == asset('/registration_fee'))
                    <a href="/registration_fee" class="list-group-item active">Registration Fees and Payment</a>
                    @else
                    <a href="/registration_fee" class="list-group-item">Registration Fees and Payment</a>
                    @endif

                    @if(url()->current() == asset('/registration_cancellation'))
                    <a href="/registration_cancellation" class="list-group-item active">Cancellations</a>
                    @else
                    <a href="/registration_cancellation" class="list-group-item">Cancellations</a>
                    @endif

                    @if(url()->current() == asset('/registration_letter'))
                    <a href="/registration_letter" class="list-group-item active">Letter of Invitation</a>
                    @else
                    <a href="/registration_letter" class="list-group-item">Letter of Invitation</a>
                    @endif

                    @if(url()->current() == asset('/registration_visa'))
                    <a href="/registration_visa" class="list-group-item active">VISA Requirement</a>
                    @else
                    <a href="/registration_visa" class="list-group-item">VISA Requirement</a>
                    @endif
                </div>
            </div>