@extends('layouts.welcome')
@section('css')
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300'
    rel='stylesheet' type='text/css'>
<link
    href='http://fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,700,700italic,600,600italic'
    rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/front/css/normalize.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/front/css/component.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/front/css/bg-slider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/front/clock/css/clock.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/front/css/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/front/css/responsive.css') }}">
<script src="{{ URL::asset('assets/front/js/vendor/modernizr-2.6.2.min.js') }}"></script>

@endsection

@section('content')

    <!-- <ul class="main-menu">

        @if (Route::has('login'))

        @auth
        <li><a href="{{ url('/admin') }}">Admin</a></li>
        @else
        <li><a style="color: white" href="{{ route('login') }}">Login</a></li>

        @if (Route::has('register'))
        <li> <a href="{{ route('register') }}">Register</a></li>
        @endif
        @endauth
        </div>
        @endif

       

    </ul> -->
        <div class="" id="clock"></div>
    <div id="clock" class="active " > 
        <div class="clock-container">
            <div id="time-container-wrap">
                <div id="time-container">
                    <div class="numbers-container"></div>
                    
                    <span id="ticker" class="clock-label">TICKER</span>
                    <span id="timelable" class="clock-label">TIME LEFT</span>
                    <span id="timeleft" class="clock-label">COUNTDOWN</span>
                    <figure id="canvas"></figure>
                </div>
            </div>
        </div>

    </div>


<!-- 
    <div class="links">
        <a href="/attendance/assign"><button class="btn btn-success"> <i class="ion ion-ios-checkbox-outline"></i>
                Attendance</button></a>
        <a href="#"></a>
        <a href="#"></a>

        <a href="/leave/assign"><button class="btn btn-danger"> <i class="ion ion-md-log-out"></i> Leave</button></a>


    </div> -->


@endsection
@section('script')
<script src="{{ URL::asset('assets/front/js/vendor/jquery-1.11.1.min.js')}}" type="text/javascript"
    charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/js/vendor/classie.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/js/vendor/jquery.easing.1.3.js')}}" type="text/javascript"
    charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/js/vendor/jquery.tubular.1.0.js')}}" type="text/javascript"
    charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/js/vendor/jquery.cycle.min.js')}}" type="text/javascript"
    charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/js/plugins.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/js/main.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/clock/js/svg.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/clock/js/svg.easing.min.js')}}" type="text/javascript"
    charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/clock/js/svg.clock.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/js/vendor/ThreeWebGL.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/js/vendor/ThreeExtras.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/clock/js/jquery.timers.min.js')}}" type="text/javascript"
    charset="utf-8"></script>
<script src="{{ URL::asset('assets/front/clock/js/clock.js')}}" type="text/javascript" charset="utf-8"></script>


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-68970184-5', 'auto');
    ga('send', 'pageview');
    ga('require', 'linkid');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter33300115 = new Ya.Metrika({
                    id: 33300115,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "../../mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
@endsection