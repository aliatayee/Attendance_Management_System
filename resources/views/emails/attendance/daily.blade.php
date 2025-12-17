@component('mail::message')
# DailyAttendanceReport

**Date:** {{ \Carbon\Carbon::parse($date)->format('d-M-Y') }}
**Total Present:** {{ $summary['total_present'] }}
**Late Comers:** {{ $summary['late_comers'] }} (After 9:00 AM)
**On Time:** {{ $summary['on_time'] }}

@component('mail::table')
| Reg. ID     | Name                        | Department     | First In     | Last Out     | Status     |
|-------------|-----------------------------|----------------|--------------|--------------|------------|
@foreach($attendance as $row)
| {{ $row->user_id }} | {{ $row->name }} | {{ $row->department }} | {{ \Carbon\Carbon::parse($row->first_in)->format('h:i A') }} | {{ $row->last_out ? \Carbon\Carbon::parse($row->last_out)->format('h:i A') : '-' }} | {{ $row->status }} |
@endforeach
@endcomponent

Thanks,<br>
{{ config('app.name') }} Attendance System
@endcomponent
