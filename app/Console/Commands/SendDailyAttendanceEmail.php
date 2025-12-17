<?php

namespace App\Console\Commands;

use App\Mail\DailyAttendanceReport;
use Carbon\Carbon;
use DB;
use Illuminate\Console\Command;
use Mail;

class SendDailyAttendanceEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'attendance:send-daily-report-old {date?}';
    protected $description = 'Send daily attendance report email';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Use yesterday by default (or pass date: 2025-12-10)
        $date = $this->argument('date') ?? Carbon::yesterday()->toDateString();

        // Get First In / Last Out per employee
        $attendance = DB::table('daily_attendances')
            ->select(
                'user_id',

                DB::raw('MIN(access_time) as first_in'),
                DB::raw('MAX(access_time) as last_out'),
                DB::raw('COUNT(*) as total_punches')
            )
            ->whereDate('access_date', $date)
            ->groupBy('user_id')
            ->orderBy('first_in')
            ->get();

        if ($attendance->isEmpty()) {
            $this->info("No attendance data for {$date}");
            return true;
        }

        // Define office start time
        $officeStart = Carbon::parse("{$date} 09:30:00");

        $totalPresent = $attendance->count();
        $lateComers = $attendance->where('first_in', '>', $officeStart)->count();
        $onTime = $totalPresent - $lateComers;

        $summary = [
            'total_present' => $totalPresent,
            'late_comers' => $lateComers,
            'on_time' => $onTime,
        ];

        // Add status to each row
        $attendance->transform(function ($item) use ($officeStart) {
            $firstIn = Carbon::parse($item->first_in);
            $item->status = $firstIn->gt($officeStart) ? 'Late' : 'Present';
            return $item;
        });

        // Send Email
        Mail::to([
            'eng.alaminbsc@gmail.com',
            'alamin@tironotech.com',
            'alminjnu17@gmail.com'
        ])->queue(new DailyAttendanceReport($attendance, $date, $summary));

        $this->info("Daily attendance report sent for {$date}");
    }
}
