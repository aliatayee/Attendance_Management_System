@extends('layouts.master')

@section('css')
<!-- Magnific popup -->
<link rel="stylesheet" href="{{ URL::asset('plugins/magnific-popup/magnific-popup.css') }}" />
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Gallery</h4>
    <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
       <li class="breadcrumb-item"><a href="javascript:void(0);">Extra Pages</a></li>
        <li class="breadcrumb-item active">Gallery</li>
   </ol>
</div>
@endsection

@section('content')
                  <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-1.jpg') }}" class="gallery-popup" title="Open Imagination">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-1.jpg') }}" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Open Imagination</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-2.jpg') }}" class="gallery-popup" title="Locked Steel Gate">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-2.jpg') }}" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Locked Steel Gate</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-3.jpg') }}" class="gallery-popup" title="Mac Sunglasses">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-3.jpg') }}" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Mac Sunglasses</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-3.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-4.jpg') }}" class="gallery-popup" title="Morning Dew">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-4.jpg') }}" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Morning Dew</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-5.jpg') }}" class="gallery-popup" title="Console Activity">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-5.jpg') }}" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Console Activity</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-6.jpg') }}" class="gallery-popup" title="Shake It!">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-6.jpg') }}" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Shake It!</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-6.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-7.jpg') }}" class="gallery-popup" title="Backpack Content">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-7.jpg') }}" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Backpack Content</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-8.jpg') }}" class="gallery-popup" title="Sunset Bulb Glow">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-8.jpg') }}" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Sunset Bulb Glow</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-9.jpg') }}" class="gallery-popup" title="Open Imagination">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-9.jpg') }}" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Open Imagination</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-3.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-10.jp') }}g" class="gallery-popup" title="Console Activity">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-10.jp') }}g" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Console Activity</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-11.jp') }}g" class="gallery-popup" title="Open Imagination">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-11.jp') }}g" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Open Imagination</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <a href="{{ URL::asset('assets/images/gallery/work-12.jp') }}g" class="gallery-popup" title="Shake It!">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ URL::asset('assets/images/gallery/work-12.jp') }}g" alt="img" class="gallery-thumb-img">
                                            <div class="project-item-overlay">
                                                <h4>Shake It!</h4>
                                                <p>
                                                    <img src="{{ URL::asset('assets/images/users/user-6.jpg') }}" alt="user" class="thumb-sm rounded-circle" />
                                                    <span class="ml-2">Curtis Marion</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->      
@endsection

@section('script')
<!-- magnific Popup -->
<script src="{{ URL::asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
@endsection

@section('script-bottom')
<script>
$('.gallery-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-fade',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    }
});
</script>
 @endsection