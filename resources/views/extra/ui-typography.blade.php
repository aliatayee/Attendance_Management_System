@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Typography</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
        <li class="breadcrumb-item active">Typography</li>
    </ol>
</div>
@endsection

@section('content')
                     <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Headings</h4>
                                        <p class="text-muted m-b-30">All HTML headings, <code
                                                class="highlighter-rouge">&lt;h1&gt;</code> through <code
                                                class="highlighter-rouge">&lt;h6&gt;</code>, are available.</p>
        
                                        <h1>h1. Bootstrap heading <small class="text-muted">Semibold 2.5rem (40px)</small></h1>
                                        <h2>h2. Bootstrap heading <small class="text-muted">Semibold 2rem (32px)</small></h2>
                                        <h3>h3. Bootstrap heading <small class="text-muted">Semibold 1.75rem (28px)</small></h3>
                                        <h4>h4. Bootstrap heading <small class="text-muted">Semibold 1.5rem (24px)</small></h4>
                                        <h5>h5. Bootstrap heading <small class="text-muted">Semibold 1.25rem (20px)</small></h5>
                                        <h6>h6. Bootstrap heading <small class="text-muted">Semibold 1rem (16px)</small></h6>
                                    </div>
                                </div>
        
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Inline text elements</h4>
                                        <p class="text-muted m-b-30">Styling for common inline HTML5 elements.</p>
        
                                        <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                        <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                        <p><u>This line of text will render as underlined</u></p>
                                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                                        <p><strong>This line rendered as bold text.</strong></p>
                                        <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                                    </div>
                                </div>
        
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Unstyled List</h4>
                                        <p class="text-muted m-b-30">Remove the default <code
                                                class="highlighter-rouge">list-style</code> and left margin on list
                                            items (immediate children only). <strong>This only applies to immediate
                                                children list items</strong>, meaning you will need to add the class
                                            for any nested lists as well.</p>
        
                                        <ul class="list-unstyled">
                                            <li>Integer molestie lorem at massa</li>
                                            <li>Nulla volutpat aliquam velit
                                                <ul>
                                                    <li>Phasellus iaculis neque</li>
                                                    <li>Purus sodales ultricies</li>
                                                    <li>Vestibulum laoreet porttitor sem</li>
                                                </ul>
                                            </li>
                                            <li>Faucibus porta lacus fringilla vel</li>
                                        </ul>
                                    </div>
                                </div>
        
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Display headings</h4>
                                        <p class="text-muted m-b-30">Traditional heading elements are designed to work best in the meat of your page content. </p>
        
                                        <h1 class="display-1">Display 1</h1>
                                        <h1 class="display-2">Display 2</h1>
                                        <h1 class="display-3">Display 3</h1>
                                        <h1 class="display-4">Display 4</h1>
        
                                    </div>
                                </div>
        
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Blockquotes</h4>
                                        <p class="text-muted m-b-30">For quoting blocks of content from
                                            another source within your document. Wrap <code
                                                    class="highlighter-rouge">&lt;blockquote
                                                class="blockquote"&gt;</code> around any <abbr
                                                    title="HyperText Markup Language">HTML</abbr> as the quote.</p>
        
                                        <blockquote class="blockquote font-16">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                        </blockquote>
        
                                        <blockquote class="blockquote blockquote-reverse font-16">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
        
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Inline List</h4>
                                        <p class="text-muted m-b-30">Remove a list’s bullets and apply some
                                            light <code class="highlighter-rouge">margin</code> with a combination
                                            of two classes, <code class="highlighter-rouge">.list-inline</code> and
                                            <code class="highlighter-rouge">.list-inline-item</code>.</p>
        
                                        <ul class="list-inline">
                                            <li class="list-inline-item">Lorem ipsum</li>
                                            <li class="list-inline-item">Phasellus iaculis</li>
                                            <li class="list-inline-item">Nulla volutpat</li>
                                        </ul>
        
                                    </div>
                                </div>
        
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Description list alignment</h4>
                                        <p class="text-muted m-b-30">Align terms and descriptions
                                            horizontally by using our grid system’s predefined classes (or semantic
                                            mixins). For longer terms, you can optionally add a <code
                                                    class="highlighter-rouge">.text-truncate</code> class to
                                            truncate the text with an ellipsis.</p>
        
                                        <dl class="row mb-0">
                                            <dt class="col-sm-3">Description lists</dt>
                                            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
        
                                            <dt class="col-sm-3">Euismod</dt>
                                            <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                            <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>
        
                                            <dt class="col-sm-3">Malesuada porta</dt>
                                            <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
        
                                            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                            <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
        
                                            <dt class="col-sm-3">Nesting</dt>
                                            <dd class="col-sm-9 mb-0">
                                                <dl class="row mb-0">
                                                    <dt class="col-sm-4">Nested definition list</dt>
                                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                                </dl>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      
@endsection

@section('script')
@endsection