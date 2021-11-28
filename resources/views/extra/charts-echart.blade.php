@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
     <h4 class="page-title">E - Chart</h4>
     <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
         <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
         <li class="breadcrumb-item active">E - Chart</li>
     </ol>
</div>
@endsection

@section('content')
                 <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Line Chart</h4>
                                        <div id="line-chart" class="e-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Mix Line-Bar</h4>
                                        <div id="mix-line-bar" class="e-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Doughnut Chart</h4>
                                        <div id="doughnut-chart" class="e-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Pie Chart</h4>
                                        <div id="pie-chart" class="e-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Scatter Chart</h4>
                                        <div id="scatter-chart" class="e-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Bubble Chart</h4>
                                        <div id="bubble-chart" class="e-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Candlestick Chart</h4>
                                        <div id="candlestick-chart" class="e-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Gauge Chart</h4>
                                        <div id="gauge-chart" class="e-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->        
@endsection

@section('script')
<!-- Echart Chart -->
<script src="{{ URL::asset('plugins/e-charts/echarts.min.js') }}"></script>
<!-- Echart int -->
<script src="{{ URL::asset('assets/pages/echart.int.js') }}"></script>  
@endsection