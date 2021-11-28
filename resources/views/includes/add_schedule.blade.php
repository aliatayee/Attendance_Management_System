<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
              
            </div>
            <h4 class="modal-title"><b>Add Schedule</b></h4>
            <div class="modal-body text-left">
                <form class="form-horizontal" method="POST" action="{{ route('schedule.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>

                        
                            <div class="bootstrap-timepicker">
                                <input type="text" class="form-control timepicker" id="name" name="slug">
                            </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="time_in" class="col-sm-3 control-label">Time In</label>

                        
                            <div class="bootstrap-timepicker">
                                <input type="time" class="form-control timepicker" id="time_in" name="time_in" required>
                            </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="time_out" class="col-sm-3 control-label">Time Out</label>

                        
                            <div class="bootstrap-timepicker">
                                <input type="time" class="form-control timepicker" id="time_out" name="time_out" required>
                            </div>
                        
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

