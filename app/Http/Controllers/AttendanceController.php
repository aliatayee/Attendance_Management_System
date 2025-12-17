<?php

namespace App\Http\Controllers;

use App\Models\DailyAttendance;
use Carbon\Carbon;
use DateTime;
use App\Models\Employee;
use App\Models\Latetime;
use App\Models\Attendance;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AttendanceEmp;
use Illuminate\Support\Facades\Http;

class AttendanceController extends Controller
{
    //show attendance
    public function index()
    {
        return view('admin.attendance')->with(['attendances' => Attendance::all()]);
    }
    public function indexPresentReport($date = null)
    {
        if ($date == null) {
            $todays = Carbon::today()->startOfDay();
        } else {
            $todays = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
        }
        $data = DailyAttendance::where('access_date', $todays->toDateString())->get();
        // Define the data payload (hardcoded as in original)
        /* $datas = [

            "operation" => "fetch_log",
            "auth_user" => "tirono_ppa",
            "auth_code" => "iw1fcd25584jw79a6b7zr7twp452x4p",
            "start_date" => $todays->toDateString(),
            "end_date" => $todays->toDateString(),
            "access_id" => 103952415
        ];


        $datapayload = json_encode($datas);

        // Use Laravel's Http facade for the POST request (replaces cURL)
        $response = Http::withHeaders([

            'Content-Type' => 'application/json',
            'Content-Length' => strlen($datapayload)
        ])->withOptions(['verify' => false])->post('https://rumytechnologies.com/rams/json_api', $datas); // Pass as array for JSON serialization

        $result = $response->body();

        // Preserve original string manipulation logic (hacky but accurate to source)
        // Note: This assumes the response starts exactly with '{"log":' and ends with '}' – corrected for potential errors by checking if replacement occurred
        $data = str_replace('{"log":', '', $result);
        if ($data === $result) {
            // If no replacement, the format might be different; fallback to full decode
            $json_data = json_decode($result, true)['log'] ?? [];
        } else {
            $data = substr($data, 0, -1);
            $json_data = json_decode($data, true); // Decode as assoc array for consistency
        }

        // For the loop: extract access_dates (preserving foreach logic)
        $access_time = [];
        $user_names = [];
        $user_ids = [];
        if (is_array($json_data)) {
            foreach ($json_data as $item) {
                if (isset($item['access_time'])) {
                    $access_time[] = $item['access_time'];
                }
                if (isset($item['user_name'])) {
                    $user_names[] = $item['user_name'];
                }

            }
        }
        $orders = Collection::make($json_data);

        $user_ids = $orders->pluck('registration_id')->unique(); */
       // return $data;
        // Pass to view: access_dates for printing, and replace_syntax string for echo (as in original)
        return view('admin.present-report', compact( 'data'));
        //return view('admin.present_report')->with(['attendances' => Attendance::all()]);
    }

    public function AbsentReport($date = null)
    {
        if ($date == null) {
            $todays = Carbon::today()->startOfDay();
        } else {
            $todays = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
        }
      $data = DailyAttendance::where('access_date',$todays)->get();
       $absentEmp = Employee::whereNotIn('user_id', $data->pluck('user_id'))->get(['user_id', 'name']);

        // Pass to view: access_dates for printing, and replace_syntax string for echo (as in original)
        return view('admin.absent-report', compact('data','absentEmp'));


    }
    public function indexAbsentReport($date = null)
    {
        if ($date == null) {
            $todays = Carbon::today()->startOfDay();
        } else {
            $todays = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
        }
        // Define the data payload (hardcoded as in original)

        $datas = [

            "operation" => "fetch_log",
            "auth_user" => "tirono_ppa",
            "auth_code" => "iw1fcd25584jw79a6b7zr7twp452x4p",
            "start_date" => $todays->toDateString(),
            "end_date" => $todays->toDateString(),

            "access_id" => 103952415
        ];

        $todays = Carbon::today()->startOfDay();
        // Define the data payload (hardcoded as in original)

        $datas = [

            "operation" => "fetch_log",
            "auth_user" => "tirono_ppa",
            "auth_code" => "iw1fcd25584jw79a6b7zr7twp452x4p",
            "start_date" => $todays->toDateString(),
            "end_date" => $todays->toDateString(),
            /*  "start_time" => "08:49:09",
             "end_time" => "15:49:09", */
            "access_id" => 103952415
        ];

        $datapayload = json_encode($datas);

        // Use Laravel's Http facade for the POST request (replaces cURL)
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Content-Length' => strlen($datapayload)
        ])->withOptions(['verify' => false])->post('https://rumytechnologies.com/rams/json_api', $datas); // Pass as array for JSON serialization


        $result = $response->body();


        // Preserve original string manipulation logic (hacky but accurate to source)
        // Note: This assumes the response starts exactly with '{"log":' and ends with '}' – corrected for potential errors by checking if replacement occurred
        $data = str_replace('{"log":', '', $result);


        if ($data === $result) {
            // If no replacement, the format might be different; fallback to full decode
            $json_data = json_decode($result, true)['log'] ?? [];
        } else {
            $data = substr($data, 0, -1);
            $json_data = json_decode($data, true); // Decode as assoc array for consistency
        }



        // For the loop: extract access_dates (preserving foreach logic)
        $access_time = [];
        $user_names = [];
        $user_ids = [];

        if (is_array($json_data)) {
            foreach ($json_data as $item) {
                if (isset($item['access_time'])) {
                    $access_time[] = $item['access_time'];
                }
                if (isset($item['user_name'])) {
                    $user_names[] = $item['user_name'];
                }
                if (isset($item['registration_id'])) {
                    $user_ids[] = $item['registration_id'];
                }
            }
        }
        $orders = Collection::make($json_data);

        $user_ids = $orders->pluck('registration_id')->unique();

        $absentEmp = Employee::whereNotIn('user_id', $user_ids)->get(['user_id', 'name']);

        // Pass to view: access_dates for printing, and replace_syntax string for echo (as in original)
        return view('admin.absent-report', compact('access_time', 'user_names', 'user_ids', 'absentEmp'));
        //return view('admin.present_report')->with(['attendances' => Attendance::all()]);
    }

    //show late times
    public function indexLatetime()
    {
        return view('admin.latetime')->with(['latetimes' => Latetime::all()]);
    }

    public function store($date = null)
    {
        if ($date === null) {
            $todays = Carbon::today()->startOfDay();
        } else {
            $todays = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
        }

        // Define the data payload (hardcoded as in original)

        $datas = [

            "operation" => "fetch_log",
            "auth_user" => "tirono_ppa",
            "auth_code" => "iw1fcd25584jw79a6b7zr7twp452x4p",
            "start_date" => $todays->toDateString(),
            "end_date" => $todays->toDateString(),

            "access_id" => 103952415
        ];


        $datapayload = json_encode($datas);


        // Use Laravel's Http facade for the POST request (replaces cURL)
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Content-Length' => strlen($datapayload)
        ])->withOptions(['verify' => false])->post('https://rumytechnologies.com/rams/json_api', $datas); // Pass as array for JSON serialization


        $result = $response->body();
        $data = str_replace('{"log":', '', $result);


        if ($data === $result) {
            // If no replacement, the format might be different; fallback to full decode
            $json_data = json_decode($result, true)['log'] ?? [];
        } else {
            $data = substr($data, 0, -1);
            $json_data = json_decode($data, true); // Decode as assoc array for consistency
        }
        $insertData = [];
        foreach ($json_data as $row) {
            $insertData[] = [
                'user_id' => $row['registration_id'],
                'access_date' => date('Y-m-d', strtotime($row['access_date'])),
                'access_time' => date('H:i:s', strtotime($row['access_time'])),
                'status' => 'present',
            ];
        }
        if (count($insertData) > 0) {
            DailyAttendance::insert($insertData);
        }
        return response()->json([
            'message' => 'Attendance data imported successfully!',
            'imported' => count($insertData),
            'data' => $insertData,
            'skipped_duplicates' => count($json_data) - count($insertData)
        ], 200);
        //return $json_data;
/* $attendance = new DailyAttendance();
foreach($json_data as $item){
    $attendance->user_id = $item['registration_id'];
    $attendance->access_date = date('Y-m-d', strtotime($item['access_time']));
    $attendance->access_time = date('H:i:s', strtotime($item['access_time']));
    $attendance->status = 'present';
     $attendance->save();


}
 return redirect()->back()->with('success', 'Attendance recorded successfully.'); */
        /*  $validated =  [
             'email' => 'required|string|email|max:255|exists:employees',
             'pin_code' => 'required|numeric|min:4',
         ];

         $attendance = new DailyAttendance();
         $attendance->user_id = $validated['emp_id'];
         $attendance->access_date = $validated['date'];
         $attendance->access_time = $validated['time_in'];
         $attendance->status = 'present';

         $attendance->save();

         return redirect()->back()->with('success', 'Attendance recorded successfully.'); */
    }

    // public static function lateTime(Employee $employee)
    // {
    //     $current_t = new DateTime(date('H:i:s'));
    //     $start_t = new DateTime($employee->schedules->first()->time_in);
    //     $difference = $start_t->diff($current_t)->format('%H:%I:%S');

    //     $latetime = new Latetime();
    //     $latetime->emp_id = $employee->id;
    //     $latetime->duration = $difference;
    //     $latetime->latetime_date = date('Y-m-d');
    //     $latetime->save();
    // }

    public static function lateTimeDevice($att_dateTime, Employee $employee)
    {
        $attendance_time = new DateTime($att_dateTime);
        $checkin = new DateTime($employee->schedules->first()->time_in);
        $difference = $checkin->diff($attendance_time)->format('%H:%I:%S');

        $latetime = new Latetime();
        $latetime->emp_id = $employee->id;
        $latetime->duration = $difference;
        $latetime->latetime_date = date('Y-m-d', strtotime($att_dateTime));
        $latetime->save();
    }

}
