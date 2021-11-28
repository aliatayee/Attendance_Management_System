@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('plugins/morris/morris.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Morris Chart</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
        <li class="breadcrumb-item active">Morris Chart</li>
    </ol>
</div>
@endsection

@section('content')
                   <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Line Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">25610</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">56210</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">12485</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
                                        <div id="morris-line-example" class="morris-charts morris-chart-height"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Bar Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">6,95,412</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">1,63,542</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                        </ul>
        
                                        <div id="morris-bar-example" class="morris-charts morris-chart-height"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Area Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
                                        <div id="morris-area-example" class="morris-charts morris-chart-height"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Donut Chart</h4>
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">3201</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">85120</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">65214</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
                                        <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Area Chart</h4>
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
                                        <div id="morris-bar-stacked" class="morris-charts morris-chart-height"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


@endsection

@section('script')
<!--Morris Chart-->
<script src="{{ URL::asset('plugins/morris/morris.min.js') }}"></script>
<script src="{{ URL::asset('plugins/raphael/raphael-min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/morris.init.js') }}"></script>
@endsection