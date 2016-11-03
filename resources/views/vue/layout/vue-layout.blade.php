<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://unpkg.com/animate.css@3.5.1/animate.min.css" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app" class="container">
            @yield('app')
        </div>
    </body>

    @yield('style')
    @section('javascript')
        <script type="text/javascript">
           var mixin ={}
        </script>
    @show
    <script src="{{asset('js/app.js')}}"></script>
</html>
