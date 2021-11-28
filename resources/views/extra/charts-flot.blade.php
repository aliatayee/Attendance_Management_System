@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Flot Chart</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
        <li class="breadcrumb-item active">Flot Chart</li>
    </ol>
</div>
@endsection

@section('content')
                    <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Multiple Statistics</h4>
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">362411</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">8489</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">985412</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
                                        <div id="website-stats" class="flot-chart flot-chart-height"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Realtime Statistics</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">365214</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">6521</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">44587</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="flotRealTime" class="flot-chart flot-chart-height"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Donut Pie</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">5484</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">964984</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">98498</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="donut-chart">
                                            <div id="donut-chart-container" class="flot-chart flot-chart-height">
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Pie Chart</h4>
        
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
        
                                        <div  id="pie-chart">
                                            <div id="pie-chart-container" class="flot-chart flot-chart-height">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row --> 
        
@endsection

@section('script')
<script src="{{ URL::asset('plugins/flot-chart/jquery.flot.min.js') }}"></script>
<script src="{{ URL::asset('plugins/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ URL::asset('plugins/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ URL::asset('plugins/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ URL::asset('plugins/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ URL::asset('plugins/flot-chart/jquery.flot.selection.js') }}"></script>
<script src="{{ URL::asset('plugins/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ URL::asset('plugins/flot-chart/curvedLines.js') }}"></script>
<script src="{{ URL::asset('plugins/flot-chart/jquery.flot.crosshair.js') }}"></script>
<script src="{{ URL::asset('assets/pages/flot.init.js') }}"></script>
@endsection