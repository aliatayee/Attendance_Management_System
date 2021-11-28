@extends('layouts.master')

@section('css')
<!--calendar css-->
<link href="{{ URL::asset('plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Calendar</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
        <li class="breadcrumb-item active">Calendar</li>
    </ol>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
           <div class="card-body">
              <div id='calendar'></div>
               <div style='clear:both'></div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('script')
<!-- Jquery-Ui -->
<script src="{{ URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ URL::asset('plugins/moment/moment.js') }}"></script>
<script src="{{ URL::asset('plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/calendar-init.js') }}"></script>   
@endsection