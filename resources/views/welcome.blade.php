@include('layouts.welcome')
    
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links color-white">
            @auth
            <a href="{{ url('/admin') }}">Admin</a>
            @else
            <a style="color: white" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <div class="clockStyle" id="clock">123</div>
            </div>

            <div class="links">
                <a href="/attendance/assign"><button class="btn btn-success"> <i class="ion ion-ios-checkbox-outline"></i>  Attendance</button></a>
                <a href="#"></a>
                <a href="#"></a>
                
                <a href="/leave/assign"><button class="btn btn-danger"> <i class="ion ion-md-log-out"></i>  Leave</button></a>
                
            </div>
        </div>
    </div>


