<!DOCTYPE html>
<html>
    <head>
        <title>Vue Get-Articles-From-DB</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="app" class="container">
            <h1>Get Articles From DB</h1>
            <articles-list :articles="{{$articles}}"></articles-list>
        </div>
    </body>
    @include('vue.partials.mixin')
    <script src="{{asset('js/app.js')}}"></script>
</html>
