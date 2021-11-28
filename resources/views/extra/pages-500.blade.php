@extends('layouts.master-blank')

@section('content')
    <!-- Begin page -->
        <div class="ex-pages">
            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="card mo-mt-2">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 offset-lg-1">
                                        <div class="ex-page-content">
                                            <h1 class="text-dark">500</h1>
                                            <h4 class="mb-4">Internal Server Error</h4>
                                            <p class="mb-5">It will be as simple as Occidental in fact, it will be Occidental to an English person</p>
                                            <a class="btn btn-primary mb-5 waves-effect waves-light" href="index"><i class="mdi mdi-home"></i> Back to Dashboard</a>
                                        </div>
                            
                                    </div>
                                    <div class="col-lg-5 offset-lg-1">
                                        <img src="{{ URL::asset('assets/images/error.png') }}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end container -->
                </div>
            </div>
        </div>
        <!-- end error page -->
@endsection