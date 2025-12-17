<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DailyAttendanceReport extends Mailable
{
    use Queueable, SerializesModels;
    public $pdfContent;

   public function __construct($pdfContent)
    {
        $this->pdfContent = $pdfContent;
    }
    /* public function __construct($pdfContent)
    {
        $this->pdfContent = $pdfContent;
    } */

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Daily Attendance Report - ' . now()->format('Y-m-d'))
                    ->markdown('emails.attendance.report')
                    ->attachData($this->pdfContent, 'attendance-report-' . now()->format('Y-m-d') . '.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
