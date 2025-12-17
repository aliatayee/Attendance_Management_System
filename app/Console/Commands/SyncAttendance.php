<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Models\DailyAttendance as Attendance;
use Carbon\Carbon;
use Storage;

class SyncAttendance extends Command
{
    protected $signature = 'attendance:sync';
    protected $description = 'Fetch attendance from API, store it, and send daily report';



    public function handle()
    {
        $this->info('Fetching attendance data...');

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




        // Replace with your API details
        /* $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.attendance_api.key'),
        ])->get(config('services.attendance_api.url'), [
            'date' => Carbon::today()->format('Y-m-d'),
        ]); */

        if ($response->failed()) {
            $this->error('API request failed.');
            return 1;
        }

       // $data = $response->json()['records'] ?? []; // Adjust based on API structure
        $result = $response->body();
        //$data = str_replace('{"log":', '', $result);
        $data = $response->json()['log'] ?? [];

        foreach ($data as $record) {
            Attendance::updateOrCreate(
                [
                    'user_id' => $record['registration_id'],
                    'access_date' => $record['access_date'],

                ],
                [
                      'user_name' => Employee::where('user_id', $record['registration_id'])->first()->name ?? null,
                    'department' => Employee::where('user_id', $record['registration_id'])->first()->department ?? null,
                    'access_time' => $record['access_time'] ?? null,
                    'status' => 'present',
                ]
            );
        }

        $this->info('Data stored successfully.');

        // Generate report (simple CSV example)
        $attendances = Attendance::whereDate('access_date', Carbon::today())->get();
        $absentEmployees = Employee::whereNotIn('user_id', function ($query) {
            $query->select('user_id')
                  ->from('daily_attendances')
                  ->whereDate('access_date', Carbon::today());
                })->get();
        //$employee = Employee::where('user_id', $record['registration_id'])->first();
        $csvContent = "User ID,User Name,Department,Position,Access Date,Access Time,Status\n";
        foreach ($attendances as $a) {
            $csvContent .= "{$a->user_id},{$a->user->name},{$a->user->department},{$a->user->position},{$a->access_date},{$a->access_time},{$a->status}\n";

        }
        foreach ($absentEmployees as $emp) {
            $csvContent .= "{$emp->user_id},{$emp->name},{$emp->department},{$emp->position}," . Carbon::today()->toDateString() . ",n/a,absent\n";
        }


        $fileName = 'attendance_report_' . Carbon::today()->format('Y-m-d') . '.pdf';
        Storage::put('reports/' . $fileName, $csvContent);
        $filePath = storage_path('app/reports/' . $fileName);

        // Send email
        Mail::raw('Daily attendance report attached. Summary: ' . $attendances->count() . ' records processed.', function ($message) use ($filePath, $fileName) {
           // $message->to('chairman@cpa.gov.bd')
            $message->to('alamin@tironotech.com')
           // ->cc(['md.mominurrashid@gmail.com','nasircp49@gmail.com','nasircp49@gmail.com','erfankhan.cpa@gmail.com','tareqbhuiyancpa@gmail.com','alamin@tironotech.com'])
                    ->subject('Daily Attendance Report - ' . Carbon::today()->format('Y-m-d'))
                    ->attach($filePath, [
                        'as' => $fileName,
                        'mime' => 'application/csv',
                    ]);
        });

        $this->info('Report emailed successfully.');

        // Optional: Clean up file
        Storage::delete('reports/' . $fileName);

        return 0;
    }
}
