<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\Latetime;
use App\Models\Attendance;


class AdminController extends Controller
{

 
    public function index()
    {
        //Dashboard statistics 
        $totalEmp =  count(Employee::all());
        $AllAttendance = count(Attendance::whereAttendance_date(date("Y-m-d"))->get());
        $ontimeEmp = count(Attendance::whereAttendance_date(date("Y-m-d"))->whereStatus('1')->get());
        $latetimeEmp = count(Attendance::whereAttendance_date(date("Y-m-d"))->whereStatus('0')->get());
            
        if($AllAttendance > 0){
                $percentageOntime = str_split(($ontimeEmp/ $AllAttendance)*100, 4)[0];
            }else {
                $percentageOntime = 0 ;
            }
        
        $data = [$totalEmp, $ontimeEmp, $latetimeEmp, $percentageOntime];
        
        return view('admin.index')->with(['data' => $data]);
    }

}
