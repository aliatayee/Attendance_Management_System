<?php

namespace App\Console\Commands;

use App\Mail\DailyAttendanceReport;
use App\Models\DailyAttendance;
use App\Models\Employee;
use App\Services\AttendanceService;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyAttendanceReport extends Command
{
    protected $signature = 'attendance:send-daily-report';
    protected $description = 'Fetch attendance, store, generate PDF, and email daily report';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        parent::__construct();
    }
 */
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Fetch and store
        $service = new AttendanceService();
        $service->fetchAndStore();

        // Get today's records
        $attendances = DailyAttendance::whereDate('access_date', today())->get();
        $absentEmployees = Employee::whereNotIn('user_id', function ($query) {
            $query->select('user_id')
                ->from('daily_attendances')
                ->whereDate('access_date', Carbon::today());
        })->get();
        //return dd($attendances);
        // Generate PDF
        $pdf = Pdf::loadView('pdf.attendance-report', [
            'attendances' => $attendances,
            'absentEmployees' => $absentEmployees,
            'date' => now()->format('Y-m-d'),
        ])->setPaper('A4', 'landscape');

        $pdfContent = $pdf->output();
        //return dd($pdfContent);
        // Send email
        Mail::to(['chairman@cpa.gov.bd','md.mominurrashid@gmail.com','nasircp49@gmail.com','nasircp49@gmail.com','erfankhan.cpa@gmail.com','tareqbhuiyancpa@gmail.com'])->cc(['alamin@tironotech.com','md@tironotech.com'])->send(new DailyAttendanceReport($pdfContent));
       // Mail::to('alamin@tironotech.com')->send(new DailyAttendanceReport($pdfContent));
        $this->info('Daily attendance report sent successfully!');
    }
}
