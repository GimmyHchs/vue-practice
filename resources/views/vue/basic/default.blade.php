<!DOCTYPE html>
<html>
    <head>
        <title>Vue Default</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" media="screen" title="no title">
    </head>
    <body>
        <div id="app" class="container">
            <h1>Default Vue Component</h1>
            <default></default>
        </div>
    </body>
    @include('vue.partials.mixin')
    <script src="{{asset('js/app.js')}}"></script>

</html>
