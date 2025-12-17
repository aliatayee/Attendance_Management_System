<!DOCTYPE html>
<html>
<head>
    <title>Daily Attendance Report</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h1 { text-align: center; }
    </style>
</head>
<body>
    <h1>Daily Attendance Report - {{ $date }}</h1>

    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Access Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
                <tr style="background: green;color:yellow;">
                    <td>{{ $attendance->user_id }}</td>
                    <td>{{ $attendance->user_name?? null }}</td>
                    <td>{{ $attendance->department ?? null }}</td>
                    <td>{{ $attendance->user->position ?? null }}</td>
                    <td>{{ $attendance->access_time }}</td>
                    <td>{{ $attendance->status }}</td>
                </tr>
            @endforeach
             @foreach ($absentEmployees as $attendance)
                <tr style="background: red;color:yellow;">
                    <td>{{ $attendance->user_id }}</td>
                    <td>{{ $attendance->name?? null }}</td>
                    <td>{{ $attendance->department ?? null }}</td>
                    <td>{{ $attendance->position ?? null }}</td>
                    <td>N/A</td>
                    <td>Absence</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>Total Present: {{ count($attendances) }} & Total Absent: {{ count($absentEmployees) }}</p>
</body>
</html>
