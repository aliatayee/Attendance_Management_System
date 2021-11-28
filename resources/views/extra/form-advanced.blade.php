@extends('layouts.master')

@section('css')
<!-- Plugins css -->
<link href="{{ URL::asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" /> 
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Form Advanced</h4>
    <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
         <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
         <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
         <li class="breadcrumb-item active">Form Advanced</li>
    </ol>
</div>
@endsection

@section('content')
             
<div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Colorpicker</h4>
                                        <p class="text-muted m-b-30">Fancy and customizable colorpicker
                                            plugin for Twitter Bootstrap.</p>
        
                                        <form action="#">
                                            <div class="form-group">
                                                <label>Simple input field</label>
                                                <input type="text" class="colorpicker-default form-control" value="#8fff00">
                                            </div>
                                            <div class="form-group">
                                                <label>With custom options - RGBA</label>
                                                <input type="text" class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba">
                                            </div>
                                            <div class="form-group m-b-0">
                                                <label>As a component</label>
                                                <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="colorpicker-default input-group">
                                                    <input type="text" readonly="readonly" value="" class="form-control">
                                                    <span class="input-group-append add-on">
                                                        <button class="btn btn-light" type="button">
                                                            <i style="background-color: rgb(124, 66, 84);margin-top: 2px;"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Horizontal mode</label>
                                                <input type="text" class="form-control" id="colorpicker-horizontal">
                                            </div>
        
                                            <div class="form-group">
                                                <label>Aliased color palette</label>
                                                <div id="colorpicker-color-pattern" data-format="alias" class="input-group colorpicker-component">
                                                    <input type="text" value="primary" class="form-control" />
                                                    <span class="input-group-append add-on">
                                                        <button class="btn btn-light" type="button">
                                                            <i style="background-color: #337ab7;margin-top: 2px;"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
        
                                            <div class="form-group mb-0">
                                                <label>Customized widget size</label>
                                                <input type="text" class="colorpicker-large form-control" value="pink">
                                            </div>
        
                                        </form>
        
                                    </div>
                                </div>
        
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Bootstrap MaxLength</h4>
                                        <p class="text-muted m-b-30">This plugin integrates by default with
                                            Twitter bootstrap using badges to display the maximum lenght of the
                                            field where the user is inserting text. </p>
        
                                        <label>Default usage</label>
                                        <p class="text-muted m-b-15">
                                            The badge will show up by default when the remaining chars are 10 or less:
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />
        
                                        <div class="m-t-20">
                                            <label>Threshold value</label>
                                            <p class="text-muted m-b-15">
                                                Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:
                                            </p>
                                            <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                        </div>
        
                                        <div class="m-t-20">
                                            <label>All the options</label>
                                            <p class="text-muted m-b-15">
                                                Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.
                                            </p>
                                            <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                        </div>
        
                                        <div class="m-t-20">
                                            <label>Position</label>
                                            <p class="text-muted m-b-15">
                                                All you need to do is specify the <code>placement</code> option, with one of those strings. If none
                                                is specified, the positioning will be defauted to 'bottom'.
                                            </p>
                                            <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                                        </div>
        
                                        <div class="m-t-20">
                                            <label>textareas</label>
                                            <p class="text-muted m-b-15">
                                                Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                            </p>
                                            <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                        </div>
        
                                    </div>
                                </div>
        
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Css Switch</h4>
                                        <p class="text-muted m-b-30">Here are a few types of switches. </p>
        
                                        <div>
                                            <input type="checkbox" id="switch1" switch="none" checked/>
                                            <label for="switch1" data-on-label="On"
                                                    data-off-label="Off"></label>
        
                                            <input type="checkbox" id="switch2" switch="default" checked/>
                                            <label for="switch2" data-on-label=""
                                                    data-off-label=""></label>
        
                                            <input type="checkbox" id="switch3" switch="bool" checked/>
                                            <label for="switch3" data-on-label="Yes"
                                                    data-off-label="No"></label>
        
                                            <input type="checkbox" id="switch6" switch="primary" checked/>
                                            <label for="switch6" data-on-label="Yes"
                                                    data-off-label="No"></label>
        
                                            <input type="checkbox" id="switch4" switch="success" checked/>
                                            <label for="switch4" data-on-label="Yes"
                                                    data-off-label="No"></label>
        
                                            <input type="checkbox" id="switch7" switch="info" checked/>
                                            <label for="switch7" data-on-label="Yes"
                                                    data-off-label="No"></label>
        
                                            <input type="checkbox" id="switch5" switch="warning" checked/>
                                            <label for="switch5" data-on-label="Yes"
                                                    data-off-label="No"></label>
        
                                            <input type="checkbox" id="switch8" switch="danger" checked/>
                                            <label for="switch8" data-on-label="Yes"
                                                    data-off-label="No"></label>
        
                                            <input type="checkbox" id="switch9" switch="dark" checked/>
                                            <label for="switch9" data-on-label="Yes"
                                                    data-off-label="No"></label>
        
                                        </div>
        
                                    </div>
                                </div>
        
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Datepicker</h4>
                                        <p class="text-muted m-b-30">Examples of twitter bootstrap datepicker.</p>
        
                                        <form action="#">
                                            <div class="form-group">
                                                <label>Default Functionality</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <label>Auto Close</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <label>Multiple Date</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple-date">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
        
                                            <div class="form-group mb-0">
                                                <label>Date Range</label>
                                                <div>
                                                    <div class="input-daterange input-group" id="date-range">
                                                        <input type="text" class="form-control" name="start" />
                                                        <input type="text" class="form-control" name="end" />
                                                    </div>
                                                </div>
                                            </div>
        
                                        </form>
                                    </div>
                                </div>
        
        
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Bootstrap TouchSpin</h4>
                                        <p class="text-muted m-b-30">A mobile and touch friendly input spinner component for Bootstrap</p>
        
                                        <form>
                                            <div class="form-group">
                                                <label class="control-label">Using data attributes</label>
                                                <input id="demo0" type="text" value="55" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Example with postfix (large)</label>
                                                <input id="demo1" type="text" value="55" name="demo1">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">With prefix </label>
                                                <input id="demo2" type="text" value="0" name="demo2" class=" form-control">
                                            </div>
        
                                            <div class="form-group">
                                                <label class="control-label">Init with empty value:</label>
                                                <input id="demo3" type="text" value="" name="demo3">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Value attribute is not set (applying settings.initval)</label>
                                                <input id="demo3_21" type="text" value="" name="demo3_21">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="control-label">Value is set explicitly to 33 (skipping settings.initval) </label>
                                                <input id="demo3_22" type="text" value="33" name="demo3_22">
                                            </div>
        
                                        </form>
        
                                    </div>
                                </div>
        
        
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Select2</h4>
                                        <p class="text-muted m-b-30">A mobile and touch friendly input spinner component for Bootstrap</p>
        
                                        <form>
                                            <div class="form-group">
                                                <label class="control-label">Single Select</label>
                                                <select class="form-control select2">
                                                    <option>Select</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="control-label">Multiple Select</label>
        
                                                <select class="select2 form-control select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>
        
                                            </div>
        
                                        </form>
        
                                    </div>
                                </div>
        
        
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Bootstrap FileStyle</h4>
                                        <p class="text-muted m-b-30">Examples of bootstrap fileStyle.</p>
        
                                        <form action="#">
                                            <div class="form-group">
                                                <label>Default file input</label>
                                                <input type="file" class="filestyle" data-buttonname="btn-secondary">
                                            </div>
        
                                            <div class="form-group mb-0">
                                                <label>File style without input</label>
                                                <input type="file" class="filestyle" data-input="false" data-buttonname="btn-secondary">
                                            </div>
        
                                        </form>
                                    </div>
                                </div>
        
                            </div> <!-- end col -->
                        </div> <!-- end row -->
@endsection

@section('script')
<!-- Plugins js -->
<script src="{{ URL::asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ URL::asset('plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
<!-- Plugins Init js -->
<script src="{{ URL::asset('assets/pages/form-advanced.js') }}"></script>
@endsection