@extends('layouts.master')

@section('css')
    <!-- Table css -->
    <link href="{{ URL::asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('breadcrumb')
    <div class="col-sm-6">
        <h4 class="page-title text-left">Attendance</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Attendance</a></li>


        </ol>
    </div>
@endsection
@section('button')
    <a href="attendance/assign" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add New</a>
@endsection

@section('content')
@include('includes.flash')



    <h2>Access Dates:</h2>
    <ul>
        @foreach($access_dates as $date)
            <li>{{ $date }}</li>
        @endforeach
    </ul>
     <h2>User Names:</h2>
    <ul>
        @foreach($user_names as $data)
            <li>{{ $data }}</li>
        @endforeach
    </ul>

    <h2>Raw JSON Data:</h2>
    <pre>{{ $replace_syntax }}</pre>

    {{-- Original echo of $replace_syntax directly in body --}}
    {!! $replace_syntax !!}


@endsection


@section('script')
    <!-- Responsive-table-->
    <script src="{{ URL::asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js') }}"></script>

@endsection

@section('script')
    <script>
        $(function() {
            $('.table-responsive').responsiveTable({
                addDisplayAllBtn: 'btn btn-secondary'
            });
        });
    </script>
@endsection
