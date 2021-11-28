@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Sparkline Chart</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
        <li class="breadcrumb-item active">Sparkline Chart</li>
    </ol>
</div>
@endsection

@section('content')
                      <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Pie Chart</h4>
                                        <div id="sparkline1" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Bar Chart</h4>
                                        <div id="sparkline2" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body analytics-info">
                                        <h4 class="mt-0 header-title">Line Chart</h4>
                                        <div id="sparkline4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Composite Bar Chart</h4>
                                        <div id="sparkline3" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Line Charts</h4>
                                        <div id="sparkline5" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-success m-b-20">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title text-white">Discrete Chart</h4>
                                        <div id="sparkline6" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Bullet Chart</h4>
                                        <div id="sparkline7"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Box Plot Chart</h4>
                                        <div id="sparkline8" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Tristate Charts</h4>
                                        <div id="sparkline9" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
@endsection

@section('script')
<!-- sparkline charts -->
<script src="{{ URL::asset('plugins/sparklines-chart/jquery.sparkline.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/sparklines.init.js') }}"></script>
@endsection