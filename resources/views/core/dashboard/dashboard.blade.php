@extends('layouts.master')
@section('title','Dashboard')
@section('content')

        <!-- begin #content -->
<div id="content" class="content">

    <h1 class="page-header">Dashboard</h1>

    <div class="row">
            <div class="col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-light-blue"><i class="ion ion-android-person"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Staff</span>
                        <span class="info-box-number">{{ $userCount }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>

           

        </div>
</div>
@stop
@section('page_script')
    <script type="text/javascript">
    $(document).ready(function(){
        });
    </script>


@endsection
