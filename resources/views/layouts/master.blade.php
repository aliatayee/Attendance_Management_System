<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Attendance Management System</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        @include('layouts.head')
    </head>
<body>
    <div id="wrapper">
         @include('layouts.header')
         @include('layouts.sidebar')
         <div class="content-page">  
            <div class="content">
                <div class="container-fluid">
                   @include('layouts.settings')
                   @yield('content')
                </div> 
            </div> 
        </div> 
        @include('layouts.footer')  
        @include('layouts.footer-script')  
    </div> 
    @include('includes.flash')
    </body>
</html>