@extends('layouts.master-blank')

@section('content')
    <!-- Begin page -->
        <div class="ex-pages">
            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-wrapper text-center">
                                    <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="logo" height="30" />
                                    <h3 class="m-t-30">Let's get started with Veltrix</h3>
                                    <p class="mb-5">It will be as simple as Occidental in fact it will be Occidental.</p>
    
                                    <div class="coming-watch text-center mb-5">
                                        <div class="countdown">
                                            <div>
                                                <div><span>0</span><span>days</span></div>
                                                <div><span>0</span><span>hours</span></div>
                                            </div>
                                            <div class="lj-countdown-ms">
                                                <div><span>0</span><span>minutes</span></div>
                                                <div><span>0</span><span>seconds</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center coming-soon-search-form pt-4">
                                        <form action="#">
                                            <input type="text" placeholder="Enter email address">
                                            <button type="submit" class="btn btn-primary">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end error page -->
@endsection

@section('script')
<!-- countdown -->
<script src="{{ URL::asset('plugins/countdown/jquery.countdown.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/countdown.int.js') }}"></script>
@endsection
