<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Employee;
use App\Models\Overtime;
use App\Models\Leave;
use App\Http\Requests\AttendanceEmp;
use Illuminate\Support\Facades\Hash;

class LeaveController extends Controller
{

    public function index()
    {
        return view('admin.leave')->with(['leaves' => Leave::all()]);
    }

    public function indexOvertime()
    {
        return view('admin.overtime')->with(['overtimes' => Overtime::all()]);
    }

    public function assign(AttendanceEmp $request)
    {
        $request->validated();

        if ($employee = Employee::whereEmail(request('email'))->first()) {

            if (Hash::check($request->pin_code, $employee->pin_code)) {
                if (!Leave::whereLeave_date(date("Y-m-d"))->whereEmp_id($employee->id)->first()) {
                    $leave = new Leave;
                    $leave->emp_id = $employee->id;
                    $leave->leave_time = date("H:i:s");
                    $leave->leave_date = date("Y-m-d");
                    // ontime + overtime if true , else "early go" ....
                    if ($leave->leave_time >= $employee->schedules->first()->time_out) {
                        leaveController::overTime($employee);
                    } else {
                        $leave->status = 0;
                    }

                    $leave->save();
                } else {
                    flash()->error('Oops', 'You have assigned your leave before !');
                    return redirect()->route('leave.login');
                }
            } else {
                flash()->error('Oops', 'Failed to assigned your leave !');
                return redirect()->route('leave.login');
            }
        }


        flash()->success('Success', 'You have successfully assigned your leave !');
        return redirect()->route('welcome');
    }


    public static function overTime(Employee $employee)
    {
        $current_t = new DateTime(date("H:i:s"));
        $start_t = new DateTime($employee->schedules->first()->time_out);
        $difference = $start_t->diff($current_t)->format('%H:%I:%S');

        $overtime = new Overtime;
        $overtime->emp_id = $employee->id;
        $overtime->duration   = $difference;
        $overtime->overtime_date  = date("Y-m-d");
        $overtime->save();
    }
}
