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
                    <h3 class="text-center">
                        <a href="index" class="logo"><img src="{{ URL::asset('assets/images/logo-dark.png') }}" height="22" alt="logo"></a>
                    </h3>
                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Free Register</h4>
                        <p class="text-muted text-center">Get your free Veltrix account now.</p>
                        <form class="form-horizontal m-t-30" action="index">
                            <div class="form-group">
                                <label for="useremail">Email</label>
                                <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>
                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>
                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <p class="mb-0">By registering you agree to the Veltrix <a href="#" class="text-primary">Terms of Use</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Already have an account ? <a href="pages-login-2" class="font-500 text-primary"> Login </a> </p>
                <p>© {{date('Y')}} Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>
        <!-- end wrapper-page -->

@endsection

@section('script')
@endsection