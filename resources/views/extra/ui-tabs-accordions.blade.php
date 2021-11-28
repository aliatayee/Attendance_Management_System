@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Tabs & Accordions</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
        <li class="breadcrumb-item active">Tabs & Accordions</li>
    </ol>
</div>
@endsection

@section('content')
                     <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Default Tabs</h4>
                                        <p class="text-muted m-b-30">Use the tab JavaScript plugin—include
                                            it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                            file—to extend our navigational tabs and pills to create tabbable panes
                                            of local content, even via dropdown menus.</p>
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Home</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Profile</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Messages</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home" role="tabpanel">
                                                <p class="mb-0">
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                    iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="profile" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                    vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                    odio cillum wes anderson 8-bit.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="messages" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                    retro mlkshk vice blog. Scenester cred you probably haven't
                                                    heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="settings" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade thundercats keffiyeh craft beer marfa
                                                    ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                    vegan.
                                                </p>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Justify Tabs</h4>
                                        <p class="text-muted m-b-30">Use the tab JavaScript plugin—include
                                            it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                            file—to extend our navigational tabs and pills to create tabbable panes
                                            of local content, even via dropdown menus.</p>
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills nav-justified" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Home</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Profile</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Messages</span>   
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                    iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                    vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                    odio cillum wes anderson 8-bit.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                    retro mlkshk vice blog. Scenester cred you probably haven't
                                                    heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade thundercats keffiyeh craft beer marfa
                                                    ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                    vegan.
                                                </p>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Custom Tabs</h4>
                                        <p class="text-muted m-b-30">Example of custom tabs</p>
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Home</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Profile</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Messages</span>   
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                                <p class="mb-0">
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                    iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                    vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                    odio cillum wes anderson 8-bit.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="messages1" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                    retro mlkshk vice blog. Scenester cred you probably haven't
                                                    heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="settings1" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade thundercats keffiyeh craft beer marfa
                                                    ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                    vegan.
                                                </p>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Custom Tabs Justified</h4>
                                        <p class="text-muted m-b-30">Example of custom tabs</p>
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Home</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Profile</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Messages</span>   
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#settings2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <p class="mb-0">
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                    iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                    vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                    odio cillum wes anderson 8-bit.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="messages2" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                    retro mlkshk vice blog. Scenester cred you probably haven't
                                                    heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="settings2" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade thundercats keffiyeh craft beer marfa
                                                    ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                    vegan.
                                                </p>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
                        </div>
        
        
                        <!-- Collapse -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Default Collapse</h4>
                                        <p class="text-muted m-b-30">
                                            You can use a link with the <code class="highlighter-rouge">href</code>
                                            attribute, or a button with the <code class="highlighter-rouge">data-target</code>
                                            attribute. In both cases, the <code class="highlighter-rouge">data-toggle="collapse"</code>
                                            is required.
                                        </p>
        
                                        <p>
                                            <a class="btn btn-primary mo-mb-2" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Link with href
                                            </a>
                                            <button class="btn btn-primary mo-mb-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Button with data-target
                                            </button>
                                        </p>
                                        <div class="collapse show" id="collapseExample">
                                            <div class="card card-body mb-0">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Accordion example</h4>
                                        <p class="text-muted m-b-30">Extend the default collapse behavior to create an accordion.</p>
        
        
                                        <div id="accordion">
                                            <div class="card mb-1">
                                                <div class="card-header p-3" id="headingOne">
                                                    <h6 class="m-0 font-14">
                                                        <a href="#collapseOne" class="text-dark" data-toggle="collapse"
                                                                aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </h6>
                                                </div>
        
                                                <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                        sunt aliqua put a bird on it squid single-origin coffee
                                                        nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                        helvetica, craft beer labore wes anderson cred nesciunt
                                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim
                                                        aesthetic synth nesciunt you probably haven't heard of them
                                                        accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-1">
                                                <div class="card-header p-3" id="headingTwo">
                                                    <h6 class="m-0 font-14">
                                                        <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                        sunt aliqua put a bird on it squid single-origin coffee
                                                        nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                        helvetica, craft beer labore wes anderson cred nesciunt
                                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim
                                                        aesthetic synth nesciunt you probably haven't heard of them
                                                        accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-0">
                                                <div class="card-header p-3" id="headingThree">
                                                    <h6 class="m-0 font-14">
                                                        <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                        sunt aliqua put a bird on it squid single-origin coffee
                                                        nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                        helvetica, craft beer labore wes anderson cred nesciunt
                                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim
                                                        aesthetic synth nesciunt you probably haven't heard of them
                                                        accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
             
                
@endsection

@section('script')
@endsection