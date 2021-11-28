@extends('layouts.master-blank')

@section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="index" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>
    
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page account-page-full">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a href="index" class="logo"><img src="{{ URL::asset('assets/images/logo-dark.png') }}" height="22" alt="logo"></a>
                    </div>
                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Locked</h4>
                        <p class="text-muted text-center">Hello Smith, enter your password to unlock the screen!</p>
                        <form class="form-horizontal m-t-30" action="index">
                            <div class="user-thumb text-center m-b-30">
                                <img src="{{ URL::asset('assets/images/users/user-6.jpg') }}" class="rounded-circle img-thumbnail" alt="thumbnail">
                                <h6>Robert Smith</h6>
                            </div>
                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>
                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Unlock</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Not you ? return <a href="pages-login-2" class="font-500 text-primary"> Sign In </a> </p>
                <p>© {{date('Y')}} Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>
        <!-- end wrapper-page -->
@endsection

@section('script')
@endsection