@extends('layouts.master-blank')

@section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="wrapper-page">
            <div class="card overflow-hidden account-card mx-3">
                <div class="bg-primary p-4 text-white text-center position-relative">
                    <h4 class="font-20 mb-4">Reset Password</h4>
                    <a href="index" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo-sm.png') }}" height="24" alt="logo"></a>
                </div>
                <div class="account-card-content"> 
                    <div class="alert alert-success m-t-30" role="alert">
                        Enter your Email and instructions will be sent to you!
                    </div>
                    <form class="form-horizontal m-t-30" action="index">
                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                        </div>

                        <div class="form-group row m-t-20 mb-0">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Remember It ? <a href="pages-login" class="font-500 text-primary"> Sign In here </a> </p>
                <p>© {{date('Y')}} Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>
            
        </div>
        <!-- end wrapper-page -->
@endsection

@section('script')
@endsection