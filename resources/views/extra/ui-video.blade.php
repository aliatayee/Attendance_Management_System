@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Video</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
        <li class="breadcrumb-item active">Video</li>
    </ol>
</div>                      
@endsection

@section('content')
                      <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Responsive embed video 16:9</h4>
                                        <p class="text-muted m-b-30">Aspect ratios can be customized with modifier classes.</p>
        
                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Responsive embed video 21:9</h4>
                                        <p class="text-muted m-b-30">Aspect ratios can be customized with modifier classes.</p>
        
                                        <!-- 21:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-21by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                        </div> <!-- end row -->
        
                        <div class="row">
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Responsive embed video 4:3</h4>
                                        <p class="text-muted m-b-30">Aspect ratios can be customized with modifier classes.</p>
        
                                        <!-- 4:3 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Responsive embed video 1:1</h4>
                                        <p class="text-muted m-b-30">Aspect ratios can be customized with modifier classes.</p>
        
                                        <!-- 1:1 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-1by1">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->  
@endsection

@section('script')
@endsection