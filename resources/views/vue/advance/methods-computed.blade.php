<!DOCTYPE html>
<html>
    <head>
        <title>Vue For-List</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <h1>Methods Computed</h1>
            <methods-computed
                :list="[
                {title:'first item', read:true},
                {title:'second item', read:false},
                {title:'third', read:true}
                ]">
            </methods-computed>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
</html>
