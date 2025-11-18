<!doctype html>
<html>

<head>
    @include('layouts.head')
</head>

<body>

    @include ('layouts.header')

    <div id="main" class="row">
        @yield('content')
    </div>

    @include ('layouts.footer')
    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    @include ('layouts.script')
    <!--<< All JS Plugins >>-->

</body>

</html>
