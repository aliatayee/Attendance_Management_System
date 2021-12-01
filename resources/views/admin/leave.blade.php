@extends('layouts.master')

@section('css')
    <!-- Table css -->
    <link href="{{ URL::asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}" rel="stylesheet"
        type="text/css" media="screen">
@endsection

@section('breadcrumb')
    <div class="col-sm-6">
        <h4 class="page-title text-left">Leave</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Leave</a></li>


        </ol>
    </div>
@endsection
@section('button')
    <a href="leave/assign" class="btn btn-primary btn-sm btn-flat"><i
            class="mdi mdi-plus mr-2"></i>Add New</a>


@endsection

@section('content')
@include('includes.flash')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        
                                <thead>
                                    <tr>
                                        <th data-priority="1">Date</th>
                                        <th data-priority="2">Employee ID</th>
                                        <th data-priority="3">Name</th>
                                     
                                        <th data-priority="5">Leave</th>
                                        <th data-priority="6">Time In</th>
                                        <th data-priority="7">Time Out</th>


                                    </tr>
                                </thead>
                                
                            <tbody>
                                @foreach( $leaves as $leave)

                                <tr>
                                    <td>{{$leave->leave_date}}</td>
                                    <td>{{$leave->emp_id}}</td>
                                    <td>{{$leave->employee->name}}</td>
                                    <td>{{$leave->leave_time}}
                                        @if( $leave->status == 1 )
                                        <span class="badge badge-primary badge-pill float-right">On Time</span>
                                        @else
                                        <span class="badge badge-danger badge-pill float-right">Early GO</span>
                                        @endif
                                    </td>
                                    <td>{{$leave->employee->schedules->first()->time_in}} </td>
                                    <td>{{$leave->employee->schedules->first()->time_out}}</td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
