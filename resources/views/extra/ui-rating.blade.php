@extends('layouts.master')

@section('css')
<!-- Bootstrap rating css -->
<link href="{{ URL::asset('plugins/bootstrap-rating/bootstrap-rating.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Rating</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
        <li class="breadcrumb-item active">Rating</li>
    </ol>
</div>
@endsection

@section('content')
                   <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <div class="row">
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Default rating</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Half rating</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-primary" data-fractions="2"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Disabled rating</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" disabled="disabled"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Readonly rating with a value</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" data-readonly value="3"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Customized heart rating</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-heart text-danger" data-empty="mdi mdi-heart-outline text-danger"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Only fill selected</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star-outline text-primary" data-empty="mdi mdi-star-outline text-primary" data-filled-selected="mdi mdi-star text-primary"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Handle events</h5>
                                                    <input type="hidden" class="rating check" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Customize tooltips</h5>
                                                    <input type="hidden" class="rating-tooltip" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Default rating</h5>
                                                    <input type="hidden" class="rating-tooltip" data-stop="10" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Set start rate to 5 [6..10]</h5>
                                                    <input type="hidden" class="rating-tooltip" data-start="5" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Set start and stop rate [2..10]</h5>
                                                    <input type="hidden" class="rating-tooltip" data-start="1" data-stop="10" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Set start and stop rate [2..10] with step 2</h5>
                                                    <input type="hidden" class="rating-tooltip" data-stop="10" data-step="2" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Custom icons</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-checkbox-marked text-primary" data-empty="mdi mdi-checkbox-blank-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Fractional rating</h5>
                                                    <input type="hidden" class="rating-tooltip-manual" data-fractions="3" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Custom CSS icons</h5>
                                                    <input type="hidden" class="rating" data-filled="symbol symbol-filled" data-empty="symbol symbol-empty" data-fractions="2"/>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
       
@endsection

@section('script')

 <!-- Bootstrap rating js -->
 <script src="{{ URL::asset('plugins/bootstrap-rating/bootstrap-rating.min.js') }}"></script>
 <script src="{{ URL::asset('assets/pages/rating-init.js') }}"></script>

@endsection