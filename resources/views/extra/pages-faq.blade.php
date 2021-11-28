@extends('layouts.master')

@section('css')

@endsection

@section('breadcrumb')
<div class="col-sm-6">
     <h4 class="page-title">Faqs</h4>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Extra Pages</a></li>
        <li class="breadcrumb-item active">Faqs</li>
    </ol>
</div>
                                
@endsection

@section('content')
      
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-center mb-5">
                                            <div class="col-lg-5">
                                                <div class="text-center faq-title pt-4 pb-4">
                                                    <div class="pt-3 pb-3">
                                                        <i class="ti-comments text-primary h3"></i>
                                                    </div>
                                                    <h5>Can't find what you are looking for?</h5>
                                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
                                                    <button type="button" class="btn btn-primary m-t-10 mr-1 waves-effect waves-light">Email Us</button>
                                                    <button type="button" class="btn btn-success m-t-10 waves-effect waves-light">Send us a tweet</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row justify-content-center">
                                            <div class="col-lg-5">
                                                <h5 class="mt-0 font-18 mb-4"><i class="ti-agenda text-primary mr-2"></i> General Questions</h5>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="card mb-0">
                                                        <a data-toggle="collapse" href="#collapseOne" class="faq" aria-expanded="true" aria-controls="collapseOne">
                                                            <div class="card-header text-dark" id="headingOne">
                                                                <h6 class="m-0 faq-question">What is Lorem Ipsum?</h6>
                                                            </div>
                                                        </a>
                        
                                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p class="text-muted mb-0 faq-ans">The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- collapse one end -->
                        
                                                    <div class="card mb-0">
                                                        <a data-toggle="collapse" href="#collapseTwo" class="faq collapsed" aria-expanded="false" aria-controls="collapseTwo">
                                                            <div class="card-header text-dark" id="headingTwo">
                                                                <h6 class="m-0 faq-question">Where does it come from?</h6>
                                                            </div>
                                                        </a>
                                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p class="text-muted mb-0 faq-ans">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- collapse two end -->
                        
                                                    <div class="card mb-0">
                                                        <a data-toggle="collapse" href="#collapseThree" class="faq collapsed" aria-expanded="false" aria-controls="collapseThree">
                                                            <div class="card-header text-dark" id="headingThree">
                                                                <h6 class="m-0 faq-question">Why do we use it?</h6>
                                                            </div>
                                                        </a>
                                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p class="text-muted mb-0 faq-ans">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- collapse three end -->
                        
                                                    <div class="card">
                                                        <a data-toggle="collapse" href="#collapseFour" class="faq collapsed" aria-expanded="false" aria-controls="collapseFour">
                                                            <div class="card-header text-dark" id="headingFour">
                                                                <h6 class="m-0 faq-question">Where can I get some?</h6>
                                                            </div>
                                                        </a>
                                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p class="text-muted mb-0 faq-ans">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- collapse four end -->
                                                </div>
                                                <!-- end accordian -->
                                            </div>

                                            <div class="col-lg-5 offset-lg-1">
                                                <h5 class="mt-0 font-18 mb-4"><i class="ti-bookmark-alt text-primary mr-2"></i> Pricing  & Plans</h5>
                                                <div class="accordion" id="accordionExample2">
                                                    <div class="card mb-0">
                                                        <a data-toggle="collapse" href="#collapseFive" class="faq" aria-expanded="true" aria-controls="collapseFive">
                                                            <div class="card-header text-dark" id="headingFive">
                                                                <h6 class="m-0 faq-question">Where can I get some?</h6>
                                                            </div>
                                                        </a>
                        
                                                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample2">
                                                            <div class="card-body">
                                                                <p class="text-muted mb-0 faq-ans">The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- collapse one end -->
                        
                                                    <div class="card mb-0">
                                                        <a data-toggle="collapse" href="#collapseSix" class="faq collapsed" aria-expanded="false" aria-controls="collapseSix">
                                                            <div class="card-header text-dark" id="headingSix">
                                                                <h6 class="m-0 faq-question">Why do we use it?</h6>
                                                            </div>
                                                        </a>
                                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample2">
                                                            <div class="card-body">
                                                                <p class="text-muted mb-0 faq-ans">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- collapse two end -->
                        
                                                    <div class="card mb-0">
                                                        <a data-toggle="collapse" href="#collapseSeven" class="faq collapsed" aria-expanded="false" aria-controls="collapseSeven">
                                                            <div class="card-header text-dark" id="headingSeven">
                                                                <h6 class="m-0 faq-question">Where does it come from?</h6>
                                                            </div>
                                                        </a>
                                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample2">
                                                            <div class="card-body">
                                                                <p class="text-muted mb-0 faq-ans">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- collapse three end -->
                        
                                                    <div class="card">
                                                        <a data-toggle="collapse" href="#collapseEight" class="faq collapsed" aria-expanded="false" aria-controls="collapseEight">
                                                            <div class="card-header text-dark" id="headingEight">
                                                                <h6 class="m-0 faq-question">What is Lorem Ipsum?</h6>
                                                            </div>
                                                        </a>
                                                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample2">
                                                            <div class="card-body">
                                                                <p class="text-muted mb-0 faq-ans">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- collapse four end -->
                                                </div>
                                                <!-- end accordian -->
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->         
@endsection

@section('script')
@endsection