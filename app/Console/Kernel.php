<?php

namespace App\Console;

use App\Console\Commands\SyncAttendance;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        /* $schedule->command('attendance:send-daily-report')
                 ->dailyAt('18:00'); */ // Run at 6 PM daily
        $schedule->command('attendance:send-daily-report')
             ->dailyAt('09:30')           // Every day at 9:30 AM
             ->timezone('Asia/Dhaka')
             ->days([1,2,3,4,7])        // Mon–Sat (remove if Sunday also working)
             ->onSuccess(function () {
                 \Log::info('Daily attendance email sent successfully.');
             })
             ->onFailure(function () {
                 \Log::error('Failed to send daily attendance email.');
             });
        //Schedule::command(SyncAttendance::class)->dailyAt('10:00'); // Or ->daily()
        Schedule::command(SyncAttendance::class)
            ->dailyAt('10:00') // Every day at 10:00 AM
            ->timezone('Asia/Dhaka')
            ->onSuccess(function () {
                \Log::info('Attendance synchronized successfully.');
            })
            ->onFailure(function () {
                \Log::error('Failed to synchronize attendance.');
            });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
