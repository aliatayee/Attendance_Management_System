@extends('layouts.master')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Form Editors</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
        <li class="breadcrumb-item active">Form Editors</li>
    </ol>
</div>
@endsection

@section('content')
                  <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Tinymce wysihtml5</h4>
                                        <p class="text-muted m-b-30">Bootstrap-wysihtml5 is a javascript
                                            plugin that makes it easy to create simple, beautiful wysiwyg editors
                                            with the help of wysihtml5 and Twitter Bootstrap.</p>
        
                                        <form method="post">
                                            <textarea id="elm1" name="area"></textarea>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Summernote</h4>
                                        <p class="text-muted m-b-30">Super simple wysiwyg editor on bootstrap</p>
                                        <div class="summernote">Hello Summernote</div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                 
@endsection

@section('script')
<!--tinymce js-->
<script src="{{ URL::asset('plugins/tinymce/tinymce.min.js') }}"></script>
<!--Summernote js-->
<script src="{{ URL::asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/form-editors.int.js') }}"></script>
@endsection