@extends('layouts.master')

@section('css')
<!-- Sweet Alert -->
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">SweetAlert 2</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
        <li class="breadcrumb-item active">SweetAlert 2</li>
    </ol>
</div>
@endsection

@section('content')
                          <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Examples</h4>
                                        <p class="text-muted m-b-30 font-14">A beautiful, responsive, customizable
                                            and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                            dependencies.</p>
        
                                        <div class="row text-center">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>A basic message</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>A title with a text under</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>A success message!</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>A warning message, with a function attached to the "Confirm"-button...</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button>
                                            </div>
        
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>By passing a parameter, you can execute something else for "Cancel".</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>A message with custom Image Header</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>A message with auto close timer</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>Custom HTML description and buttons</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>A message with custom width, padding and background</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>Ajax request example</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>Chaining modals (queue) example</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="chaining-alert">Click me</button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 m-b-30">
                                                <p>Dynamic queue example</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="dynamic-alert">Click me</button>
                                            </div>
                                        </div> <!-- end row -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->               
@endsection

@section('script')
<!-- Sweet-Alert  -->
<script src="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/sweet-alert.init.js') }}"></script>  
@endsection