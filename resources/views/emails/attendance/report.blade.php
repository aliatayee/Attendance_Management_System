@component('mail::message')
# Daily Attendance Report

The attendance report for {{ now()->format('Y-m-d') }} is attached as a PDF.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
