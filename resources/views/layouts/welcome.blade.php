<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Attendance Management System</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/">
    <link href="{{ URL::asset('assets/css/attendanceFront.css') }}" rel="stylesheet" type="text/css" />
    
    @include('layouts.head')
</head>

<body class="pb-0" style="background:#2a3142;">
  
    @yield('content')
    @include('layouts.footer-script')
    @include('includes.flash')
    <script src="{{ URL::asset('assets/js/attendanceFront.js') }}"></script>
   
</body>

</html>
