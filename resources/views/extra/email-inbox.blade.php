@extends('layouts.master')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}" />
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Inbox</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
        <li class="breadcrumb-item active">Inbox</li>
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
                                                <div class="dropdown-menu">
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
                                        <ul class="message-list">
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk19">
                                                        <label for="chk19" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Peter, me (3)</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">Hello – <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                    </a>
                                                    <div class="date">Mar 6</div>
                                                </div>
                                            </li>
                
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk20">
                                                        <label for="chk20" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">me, Susanna (7)</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject"><span class="badge-warning badge mr-2">Freelance</span>Since you asked... and i'm
                                                        inconceivably bored at the train station –
                                                        <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                    </a>
                                                    <div class="date">Mar. 6</div>
                                                </div>
                                            </li>
        
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk6">
                                                        <label for="chk6" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Web Support Dennis</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">Re: New mail settings – 
                                                        <span class="teaser">Will you answer him asap?</span>
                                                    </a>
                                                    <div class="date">Mar 7</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk7">
                                                        <label for="chk7" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">me, Peter (2)</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject"><span class="badge-info badge mr-2">Support</span>Off on Thursday - 
                                                        <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                    </a>
                                                    <div class="date">Mar 4</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk8">
                                                        <label for="chk8" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Medium</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject"><span class="badge-primary badge mr-2">Social</span>This Week's Top Stories – 
                                                        <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                    </a>
                                                    <div class="date">Feb 28</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk9">
                                                        <label for="chk9" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Death to Stock</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">Montly High-Res Photos – 
                                                        <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                    </a>
                                                    <div class="date">Feb 28</div>
                                                </div>
                                            </li>
        
                                            <li class="unread">
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk3">
                                                        <label for="chk3" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Randy, me (5)</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject"><span class="badge-success badge mr-2">Family</span>Last pic over my village – 
                                                        <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                    </a>
                                                    <div class="date">5:01 am</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk4">
                                                        <label for="chk4" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Andrew Zimmer</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                        – <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                    </a>
                                                    <div class="date">Mar 8</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk5">
                                                        <label for="chk5" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Infinity HR</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">Sveriges Hetaste sommarjobb –
                                                        <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                    </a>
                                                    <div class="date">Mar 8</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk10">
                                                        <label for="chk10" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Revibe</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject"><span class="badge-danger badge mr-2">Friends</span>Weekend on Revibe – 
                                                        <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                    </a>
                                                    <div class="date">Feb 27</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk11">
                                                        <label for="chk11" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Erik, me (5)</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">Regarding our meeting – 
                                                        <span class="teaser">That's great, see you on Thursday!</span>
                                                    </a>
                                                    <div class="date">Feb 24</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk12">
                                                        <label for="chk12" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">KanbanFlow</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject"><span class="badge-primary badge mr-2">Social</span>Task assigned: Clone ARP's website
                                                        – <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                    </a>
                                                    <div class="date">Feb 24</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk13">
                                                        <label for="chk13" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Tobias Berggren</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">Let's go fishing! – 
                                                        <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                    </a>
                                                    <div class="date">Feb 23</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk14">
                                                        <label for="chk14" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Charukaw, me (7)</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">Hey man – <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                    </a>
                                                    <div class="date">Feb 23</div>
                                                </div>
                                            </li>
                                            <li class="unread">
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk15">
                                                        <label for="chk15" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">me, Peter (5)</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject"><span class="badge-info badge mr-2">Support</span>Home again! – <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                    </a>
                                                    <div class="date">Feb 21</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk16">
                                                        <label for="chk16" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Stack Exchange</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                        – <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                    </a>
                                                    <div class="date">Feb 21</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk17">
                                                        <label for="chk17" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">Google Drive Team</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">You can now use your storage in Google
                                                        Drive – <span class="teaser">Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.</span>
                                                    </a>
                                                    <div class="date">Feb 20</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk18">
                                                        <label for="chk18" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">me, Susanna (11)</a><span class="star-toggle fa fa-star-o"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject">Train/Bus – <span class="teaser">Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.</span>
                                                    </a>
                                                    <div class="date">Feb 19</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> <!-- card -->
                                    <div class="row m-t-20">
                                        <div class="col-7">
                                            Showing 1 - 20 of 1,524
                                        </div>
                                        <div class="col-5">
                                            <div class="btn-group float-right">
                                                <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end Col-9 -->
                            </div>
                        </div><!-- End row -->     
    
@endsection

@section('script')
@endsection