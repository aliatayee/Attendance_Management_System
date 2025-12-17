<?php
namespace App\Services;

use App\Models\Employee;
use Carbon\Carbon;
use App\Models\DailyAttendance as Attendance;
use Illuminate\Support\Facades\Http;

class AttendanceService
{
    public function fetchAndStore()
    {
        /* $response = Http::get('https://api.example.com/attendance', [
            'date' => now()->format('Y-m-d'),
            'api_key' => config('services.attendance.api_key'), // Store in .env
        ]); */
        $todays = Carbon::today();

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

        if ($response->successful()) {
            $logs = $response->json()['log'] ?? [];
           // $logs = $response->json();

            foreach ($logs as $record) {
                Attendance::updateOrCreate(
                   [
                    'user_id' => $record['registration_id'],
                    'access_date' => $record['access_date'],

                ],
                [
                    'user_name' => $record['user_name'] ?? null,
                    'department' => $record['department'] ?? null,
                    'access_time' => $record['access_time'] ?? null,
                    'status' => 'present',
                ]

                );
            }

            return $logs;
            //$this->info('Data stored successfully.');
        }

        \Log::error('API fetch failed: ' . $response->body());
        return [];
    }
}
