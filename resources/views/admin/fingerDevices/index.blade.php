@extends('layouts.master')

@section('content')



        <div style="margin-bottom: 10px;" class="row">

            <div class="col-lg-12">

                <a class="btn btn-success" href="{{ route('finger_device.create') }}">

                    {{ trans('global.add') }} {{ trans('cruds.finger_device.title_singular') }}

                </a>

                {{-- <a class="btn btn-primary"

                   href="{{ route('finger_device.get.attendance') }}">

                    <i class="fas fa-cogs"></i>

                    Run Attendance Queue

                </a> --}}

                <a class="btn btn-primary"

                   href="{{ route('finger_device.clear.attendance') }}">

                    <i class="fas fa-cog"></i>

                    Clear device attendance

                </a>

            </div>

        </div>


    <div class="card">

        <div class="card-header">

            {{ trans('cruds.finger_device.title_singular') }} {{ trans('global.list') }}

        </div>



        <div class="card-body">

            <div class="table-rep-plugin">
                <div class="table-responsive mb-0" data-pattern="priority-columns">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            
                    <thead>

                    <tr>

                       

                        <th>

                            {{ trans('cruds.finger_device.fields.id') }}

                        </th>

                        <th>

                            {{ trans('cruds.finger_device.fields.name') }}

                        </th>

                        <th>

                            {{ trans('cruds.finger_device.fields.ip') }}

                        </th>

                        <th>

                            {{ trans('cruds.finger_device.fields.serialNumber') }}

                        </th>

                        <th>

                            Status

                        </th>

                        <th>
                            Actions

                        </th>

                    </tr>

                    </thead>

                    @php

                        $helper = new \App\Helpers\FingerHelper();

                    @endphp

                    <tbody>

                    @foreach($devices as $key => $finger_device)

                        <tr data-entry-id="{{ $finger_device->id }}">

                          

                            <td>

                                {{ $finger_device->id ?? '' }}

                            </td>

                            <td>

                                {{ $finger_device->name ?? '' }}

                            </td>

                            <td>

                                {{ $finger_device->ip ?? '' }}

                            </td>

                            <td>

                                {{ $finger_device->serialNumber ?? '' }}

                            </td>

                            <td>

                                @php

                                    $device = $helper->init($finger_device->ip);

                                @endphp

                                @if($helper->getStatus($device))

                                    <div class="badge badge-success">

                                        Active

                                    </div>

                                @else

                                    <div class="badge badge-danger">

                                        Deactivate

                                    </div>

                                @endif

                                

                                    <a class="btn btn-xs btn-outline-success"

                                       href="{{ route('finger_device.add.employee', $finger_device->id) }}">

                                        <i class="fas fa-plus"></i>

                                        Add Employee

                                    </a>
                                    
                                    <a class="btn btn-xs btn-outline-success"

                                       href="{{ route('finger_device.get.attendance', $finger_device->id) }}">

                                        <i class="fas fa-plus"></i>

                                        Get Attendance

                                    </a>

                                

                            </td>

                            <td>

                            
                                    <a class="btn btn-xs btn-primary"

                                       href="{{ route('finger_device.show', $finger_device->id) }}">

                                        {{ trans('global.view') }}

                                    </a>

                            



                              

                                    <a class="btn btn-xs btn-info"

                                       href="{{ route('finger_device.edit', $finger_device->id) }}">

                                        {{ trans('global.edit') }}

                                    </a>

                             



                              

                                    <form action="{{ route('finger_device.destroy', $finger_device->id) }}"

                                          method="POST"

                                          onsubmit="return confirm('{{ trans('global.areYouSure') }}');"

                                          style="display: inline-block;">

                                        <input type="hidden" name="_method" value="DELETE">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <input type="submit" class="btn btn-xs btn-danger"

                                               value="{{ trans('global.delete') }}">

                                    </form>




                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('scripts')

    @parent

    {{--    @livewireScripts--}}

    <script>

        // window.livewire.on('userStore', () => {

        //     $('#exampleModal').modal('hide');

        // });

        $(function () {

            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

            @can('finger_device_delete')

            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'

            let deleteButton = {

                text: deleteButtonTrans,

                url: "{{ route('admin.finger_device.massDestroy') }}",

                className: 'btn-danger',

                action: function (e, dt, node, config) {

                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {

                        return $(entry).data('entry-id')

                    });



                    if (ids.length === 0) {

                        alert('{{ trans('global.datatables.zero_selected') }}')



                        return

                    }



                    if (confirm('{{ trans('global.areYouSure') }}')) {

                        $.ajax({

                            headers: {'x-csrf-token': _token},

                            method: 'POST',

                            url: config.url,

                            data: {ids: ids, _method: 'DELETE'}

                        })

                            .done(function () {

                                location.reload()

                            })

                    }

                }

            }

            dtButtons.push(deleteButton)

            @endcan



            $.extend(true, $.fn.dataTable.defaults, {

                orderCellsTop: true,

                order: [[1, 'desc']],

                pageLength: 100,

            });

            let table = $('.datatable-finger_device:not(.ajaxTable)').DataTable({buttons: dtButtons})

            $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {

                $($.fn.dataTable.tables(true)).DataTable()

                    .columns.adjust();

            });



        })



    </script>

@endsection

