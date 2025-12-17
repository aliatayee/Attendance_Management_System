@extends('layouts.master')

@section('css')
    <!-- Table css -->
    <link href="{{ URL::asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}" rel="stylesheet" type="text/css"
        media="screen">
@endsection

@section('breadcrumb')
    <div class="col-sm-6">
        <h4 class="page-title text-left">Today's Absent Report</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Absent Report</a></li>


        </ol>
    </div>
@endsection
@section('button')
    {{--   <a href="attendance/assign" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add New</a> --}}
@endsection

@section('content')
    @include('includes.flash')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{--  {{ print_r($user_ids) }} --}}
                    {{--  <h2>json_data</h2>
                    {{ print_r($employee) }} --}}
                    {{--                     <h2>access_time</h2>
{{ DD($access_time) }}
<br> --}}
                    {{-- <h2>data</h2>
{{ DD($data) }} --}}
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        {{--   <th data-priority="1">Date</th> --}}
                                        <th data-priority="1">Employee ID</th>
                                        <th data-priority="2">Name</th>
                                        <th data-priority="3">Attendance Status</th>




                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                        $i = 0;
                                    @endphp
                                   {{--  @for ($i; $i < count($user_names); $i++) --}}
                                        {{--  @if ($user_ids[$i] == $employee->user_id[$i])
                                        <tr>

                                            <td>{{ $user_ids[$i] ?? 'N/A' }}</td>
                                            <td>{{ $user_names[$i] ?? 'N/A' }}</td>
                                            <td>

                                                    Absent

                                            </td>


                                        </tr>
                                       @endif --}}
{{--  @endfor --}}
                                        @foreach ($absentEmp as $record)
                                            <tr style="background: red;color:yellow;">
                                                <td>{{ $record['user_id'] }}</td>
                                                <td>{{ $record['name'] }}</td>

                                                    <td>Absent</td>


                                            </tr>
                                        @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
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
