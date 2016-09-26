<!DOCTYPE html>
<html>
    <head>
        <title>Vue Vue-Resource(Ajax)</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <h1>Get Articles From Vue Plugin (Resource <=> Ajax)</h1>
            <vue-resource-list></vue-resource-list>
        </div>
    </body>
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
    <script src="{{asset('js/app.js')}}"></script>
</html>
