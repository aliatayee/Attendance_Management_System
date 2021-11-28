@extends('layouts.master-blank')
@section('content')
       

        <div class="wrapper-page">
            <div class="card overflow-hidden account-card mx-3">
                @if(\Route::currentRouteName() == 'attendance.login' )

                <div class="bg-primary p-4 text-white text-center position-relative">
                    <h4 class="font-20 m-b-5">Attendance Login</h4>
                    <p class="text-white-50 mb-4">Sign in to assign your Attendance</p>
                    <a href="index" class="logo logo-admin"><h1>A</h1></a>
                </div>
                @include('includes.flash')
                <div class="account-card-content"> 
                <form class="form-horizontal m-t-30" method="POST" action="{{ route('attendance.assign') }}">

                @else
                
                
                <div class="bg-primary p-4 text-white text-center position-relative">
                    <h4 class="font-20 m-b-5">Leave Login</h4>
                    <p class="text-white-50 mb-4">Sign in to submit your Leave</p>
                    <a href="index" class="logo logo-admin"><h1>A</h1></a>
                </div>
                <div class="account-card-content">
                    @include('includes.flash')

                    <form class="form-horizontal m-t-30" method="POST" action="{{ route('leave.assign') }}">

                @endif
                @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email"  name="email" placeholder="Type Your Email" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="pin_code">Pin Code</label>
                            <input type="password" class="form-control" id="pin_code"name="pin_code" placeholder="input Your Pin Code ( 4 Digits )" required>
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-sm-6 ">
                                <button class="btn btn-primary w-md waves-effect waves-light" name="login" type="submit">Log In</button>
                            </div>
                        </div>

                    </form>
                 
                </div>
            </div>
        </div>
        <!-- end wrapper-page -->
@endsection

        
         

