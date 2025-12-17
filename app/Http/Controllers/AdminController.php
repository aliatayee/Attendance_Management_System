<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\Latetime;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;


class AdminController extends Controller
{


    public function index()
    {
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
        $user_ids = [];
        $orders = Collection::make($json_data);
        $fdata = $orders->pluck('registration_id')->unique();
        if (is_array($json_data)) {
            foreach ($json_data as $item) {

                if (isset($item['registration_id'])) {
                    $user_ids[] = $item['registration_id'];
                }
            }
        }
        $absentEmp = Employee::whereNotIn('user_id', $user_ids)->get(['user_id', 'name']);
        //Dashboard statistics
        $totalEmp = count(Employee::all());
        $AllAttendance = count(Attendance::whereAttendance_date(date("Y-m-d"))->get());
        $presentEmp = count($fdata);
        $absentEmp = ($totalEmp - $presentEmp);
        $ontimeEmp = count(Attendance::whereAttendance_date(date("Y-m-d"))->whereStatus('1')->get());
        $latetimeEmp = count(Attendance::whereAttendance_date(date("Y-m-d"))->whereStatus('0')->get());

        if ($AllAttendance > 0) {
            $percentageOntime = str_split(($ontimeEmp / $AllAttendance) * 100, 4)[0];
        } else {
            $percentageOntime = 0;
        }

        $data = [$totalEmp, $presentEmp, $absentEmp, $latetimeEmp, $percentageOntime];

        return view('admin.index')->with(['data' => $data]);
    }

}
