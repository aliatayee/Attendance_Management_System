@extends('layouts.master-blank')

@section('content')
        <section class="mt-5 mb-5">
            <div class="container-alt container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="home-wrapper m-t-40">
                            <div class="mb-4">
                                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="logo" height="30" />
                            </div>

                            <div class="maintenance-img">
                                <img src="{{ URL::asset('assets/images/maintenance.png') }}" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <h3 class="m-t-30">Site is Under Maintenance</h3>
                            <p>Please check back in sometime.</p>

                            <div class="row">
                                <div class="text-center col-md-4">
                                    <div class="card mt-4 maintenance-box">
                                        <div class="card-body">
                                            <i class="mdi mdi-airplane-takeoff m-b-15"></i>
                                            <h6 class="text-uppercase">Why is the Site Down?</h6>
                                            <p class="text-muted m-t-20">There are many variations of passages of
                                                Lorem Ipsum available, but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center col-md-4">
                                    <div class="card mt-4 maintenance-box">
                                        <div class="card-body">
                                            <i class="mdi mdi-clock-alert m-b-15"></i>
                                            <h6 class="text-uppercase">
                                                What is the Downtime?</h6>
                                            <p class="text-muted m-t-20">Contrary to popular belief, Lorem Ipsum is not
                                                simply random text. It has roots in a piece of classical.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center col-md-4">
                                    <div class="card mt-4 maintenance-box">
                                        <div class="card-body">
                                            <i class="mdi mdi-email m-b-15"></i>
                                            <h6 class="text-uppercase">
                                                Do you need Support?</h6>
                                            <p class="text-muted m-t-20">If you are going to use a passage of Lorem
                                                Ipsum, you need to be sure there isn't anything embar.. <a
                                                        href="mailto:no-reply@domain.com"
                                                        class="text-decoration-underline">no-reply@domain.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('script')
@endsection