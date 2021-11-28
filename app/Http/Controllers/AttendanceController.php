<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Employee;
use App\Models\Latetime;
use App\Models\Attendance;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AttendanceEmp;


class AttendanceController extends Controller
{

    public function index()
    {
        return view('admin.attendance')->with(['attendances' => Attendance::all()]);
    }

    public function indexLatetime()
    {
        return view('admin.latetime')->with(['latetimes' => Latetime::all()]);
    }

    public function assign(AttendanceEmp $request)
    {
        $request->validated();

        if ($employee = Employee::whereEmail(request('email'))->first()) {

            if (Hash::check($request->pin_code, $employee->pin_code)) {
                if (!Attendance::whereAttendance_date(date("Y-m-d"))->whereEmp_id($employee->id)->first()) {
                    $attendance = new Attendance;
                    $attendance->emp_id = $employee->id;
                    $attendance->attendance_time = date("H:i:s");
                    $attendance->attendance_date = date("Y-m-d");

                    if (!($employee->schedules->first()->time_in >= $attendance->attendance_time)) {
                        $attendance->status = 0;
                        AttendanceController::lateTime($employee);
                    };
                    $attendance->save();
                } else {
                    flash()->error('Oops', 'You have assigned your attendance before !');
                    return redirect()->route('attendance.login');
                }
            } else {
                flash()->error('Oops', ' Failed to assign your attendance !');
                return redirect()->route('attendance.login');
            }
        }


        flash()->success('Success', 'You have successfully assigned your attedance !');
        return redirect()->route('welcome');
    }
    public function attended($user_id)
    {

        $attendance = Attendance::where('emp_id', $user_id)->with('employee')->get();

        return view('/attended', compact('attendance'));
    }


    public static function lateTime(Employee $employee)
    {
        $current_t = new DateTime(date("H:i:s"));
        $start_t = new DateTime($employee->schedules->first()->time_in);
        $difference = $start_t->diff($current_t)->format('%H:%I:%S');


        $latetime = new Latetime;
        $latetime->emp_id = $employee->id;
        $latetime->duration   = $difference;
        $latetime->latetime_date  = date("Y-m-d");
        $latetime->save();
    }
}
