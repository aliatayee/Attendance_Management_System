@extends('layouts.master-blank')

@section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        
        <div class="wrapper-page">
            <div class="card overflow-hidden account-card mx-3">
                <div class="bg-primary p-4 text-white text-center position-relative">
                    <h4 class="font-20 m-b-5">Locked</h4>
                    <p class="text-white-50 mb-4">Hello Smith, enter your password to unlock the screen!</p>
                    <a href="index" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo-sm.png') }}" height="24" alt="logo"></a>
                </div>
                <div class="account-card-content">  
                    <form class="form-horizontal m-t-30" action="index">
                        <div class="user-thumb text-center m-b-30">
                            <img src="{{ URL::asset('assets/images/users/user-6.jpg') }}" class="rounded-circle img-thumbnail" alt="thumbnail">
                            <h6>Robert Smith</h6>
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                        </div>
                        <div class="form-group row m-t-20 mb-0">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Unlock</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="m-t-40 text-center">
                <p>Not you ? return <a href="pages-login" class="font-500 text-primary"> Sign In </a> </p>
                <p>© {{date('Y')}} Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>
        <!-- end wrapper-pags -->
@endsection

@section('script')
@endsection