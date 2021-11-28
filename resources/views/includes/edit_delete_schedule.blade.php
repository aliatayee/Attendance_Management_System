<!-- Edit -->
<div class="modal fade" id="edit{{ $schedule->slug }}">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <h4 class="modal-title"><b>Update Schedule</b></h4>
            <div class="modal-body text-left">
                <form class="form-horizontal" method="POST" action="{{ route('schedule.update', $schedule->slug) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>


                        <div class="bootstrap-timepicker">
                            <input type="text" class="form-control timepicker" id="name" name="slug"
                                value="{{ $schedule->slug }}">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="edit_time_in" class="col-sm-3 control-label">Time In</label>


                        <div class="bootstrap-timepicker">
                            <input type="time" class="form-control timepicker" id="edit_time_in" name="time_in"
                                value="{{ $schedule->time_in }}">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="edit_time_out" class="col-sm-3 control-label">Time out</label>


                        <div class="bootstrap-timepicker">
                            <input type="time" class="form-control timepicker" id="edit_time_out" name="time_out"
                                value="{{ $schedule->time_out }}">
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete{{ $schedule->slug }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header " style="align-items: center">
               
                <h4 class="modal-title "><span class="employee_id">Delete Schedule</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('schedule.destroy', $schedule->slug) }}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <div class="text-center">
                        <h6>Are you sure you want to delete:</h6>
                        <h2 class="bold del_employee_name">{{ $schedule->slug}}</h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>