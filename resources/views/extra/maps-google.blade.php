@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Google Map</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
        <li class="breadcrumb-item active">Google Map</li>
    </ol>
</div>
@endsection

@section('content')
                    <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Markers</h4>
                                        <p class="text-muted m-b-30">Example of google maps.</p>
        
                                        <div id="gmaps-markers" class="gmaps"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Overlays</h4>
                                        <p class="text-muted m-b-30">Example of google maps.</p>
        
                                        <div id="gmaps-overlay" class="gmaps"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Street View Panoramas</h4>
                                        <p class="text-muted m-b-30">Example of google maps.</p>
        
                                        <div id="panorama" class="gmaps-panaroma"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Map Types</h4>
                                        <p class="text-muted m-b-30">Example of google maps.</p>
        
                                        <div id="gmaps-types" class="gmaps"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->        
     
@endsection

@section('script')
<!-- google maps api -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
<!-- Gmaps file -->
<script src="{{ URL::asset('plugins/gmaps/gmaps.min.js') }}"></script>
<!-- demo codes -->
<script src="{{ URL::asset('assets/pages/gmaps.js') }}"></script>
@endsection