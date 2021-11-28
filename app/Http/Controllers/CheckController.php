<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Leave;

class CheckController extends Controller
{
    /**
     * Display a listing of the attendance.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.check')->with(['employees' => Employee::all()]);
    }

    public function CheckStore(Request $request)
    {


        if (isset($request->attd)) {


            foreach ($request->attd as $keys => $values) {

                foreach ($values as $key => $value) {

                    if ($employee = Employee::whereId(request('emp_id'))->first()) {
                        if (!Attendance::whereAttendance_date($keys)->whereEmp_id($key)->first()) {
                            $data = new Attendance();
                            $data->emp_id = $key;

                            $data->attendance_time = date("H:i:s");
                            $data->attendance_date = $keys;

                            if (!($employee->schedules->first()->time_in >= $data->attendance_time)) {
                                $data->status = 0;
                                AttendanceController::lateTime($employee);
                            };
                            $data->save();
                        }
                    }
                }
            }
        }
        if (isset($request->leave)) {


            foreach ($request->leave as $keys => $values) {

                foreach ($values as $key => $value) {
                    if ($employee = Employee::whereId(request('emp_id'))->first()) {
                        if (!Leave::whereLeave_date($keys)->whereEmp_id($key)->first()) {
                            $data = new Leave();
                            $data->emp_id = $key;

                            $data->leave_time = date("H:i:s");
                            $data->leave_date = $keys;

                            if ($data->leave_time >= $employee->schedules->first()->time_out) {
                                leaveController::overTime($employee);
                            } else {
                                $data->status = 0;
                            }
                            $data->save();
                        }
                    }
                }
            }
        }
        flash()->success('Success', 'You have successfully submited the attendance !');
        return back();
    }
}
