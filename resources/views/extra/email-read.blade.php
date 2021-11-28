@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Email Read</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
        <li class="breadcrumb-item active">Email Read</li>
    </ol>
</div>
@endsection

@section('content')
             
                     <div class="row">
                            <div class="col-12">
                                <!-- Left sidebar -->
                                <div class="email-leftbar card">
                                    <a href="email-compose" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>
                                    <div class="mail-list m-t-20">
                                        <a href="#" class="active">Inbox <span class="ml-1">(18)</span></a>
                                        <a href="#">Starred</a>
                                        <a href="#">Important</a>
                                        <a href="#">Draft</a>
                                        <a href="#">Sent Mail</a>
                                        <a href="#">Trash</a>
                                    </div>
        
                                    <h6 class="m-t-30">Labels</h6>
        
                                    <div class="mail-list m-t-20">
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-right"></span>Theme Support</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-right"></span>Freelance</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-primary float-right"></span>Social</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-danger float-right"></span>Friends</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-right"></span>Family</a>
                                    </div>
        
                                    <h6 class="m-t-30">Chat</h6>
                                    <div class="m-t-20">
                                        <a href="#" class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Scott Median</p>
                                                <p class="text-muted">Hello</p>
                                            </div>
                                        </a>
        
                                        <a href="#" class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="{{ URL::asset('assets/images/users/user-3.jpg') }}" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Julian Rosa</p>
                                                <p class="text-muted">What about our next..</p>
                                            </div>
                                        </a>
        
                                        <a href="#" class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">David Medina</p>
                                                <p class="text-muted">Yeah everything is fine</p>
                                            </div>
                                        </a>
        
                                        <a href="#" class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="{{ URL::asset('assets/images/users/user-6.jpg') }}" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Jay Baker</p>
                                                <p class="text-muted">Wow that's great</p>
                                            </div>
                                        </a>
        
                                    </div>
                                </div>
                                <!-- End Left sidebar -->
        
        
                                <!-- Right Sidebar -->
                                <div class="email-rightbar mb-3">
                                    
                                    <div class="card">
                                        <div class="btn-toolbar p-3" role="toolbar">
                                            <div class="btn-group mo-mb-2">
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
                                            </div>
                                            <div class="btn-group ml-1 mo-mb-2">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-folder"></i>
                                                </button>
                                                <div class="dropdown-menu mo-mb-2">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>
                                            <div class="btn-group ml-1 mo-mb-2">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-tag"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>
            
                                            <div class="btn-group ml-1 mo-mb-2">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    More
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Mark as Unread</a>
                                                    <a class="dropdown-item" href="#">Mark as Important</a>
                                                    <a class="dropdown-item" href="#">Add to Tasks</a>
                                                    <a class="dropdown-item" href="#">Add Star</a>
                                                    <a class="dropdown-item" href="#">Mute</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card-body">
        
                                            <div class="media m-b-30">
                                                <img class="d-flex mr-3 rounded-circle thumb-md" src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h4 class="font-14 m-0">Humberto D. Champion</h4>
                                                    <small class="text-muted">support@domain.com</small>
                                                </div>
                                            </div>
        
                                            <h4 class="mt-0 font-16">This Week's Top Stories</h4>
        
                                            <p>Dear Lorem Ipsum,</p>
                                            <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate molestie. In at felis ac velit maximus
                                                convallis.</p>
                                            <p>Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia
                                                lacus, vel tincidunt mi nibh sit amet lorem.</p>
                                            <p>Sincerly,</p>
                                            <hr/>
        
                                            <div class="row">
                                                <div class="col-xl-2 col-6">
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="{{ URL::asset('assets/images/small/img-3.jpg') }}" alt="Card image cap">
                                                        <div class="p-t-10 p-b-10 text-center">
                                                            <a href="" class="font-500">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-6">
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="{{ URL::asset('assets/images/small/img-4.jpg') }}" alt="Card image cap">
                                                        <div class="p-t-10 p-b-10 text-center">
                                                            <a href="" class="font-500">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <a href="email-compose" class="btn btn-secondary waves-effect m-t-30"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div> <!-- end Col-9 -->
                            </div>
                        </div><!-- End row -->
@endsection

@section('script')
@endsection