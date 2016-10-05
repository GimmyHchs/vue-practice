<!DOCTYPE html>
<html>
    <head>
        <title>Vue For-List</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="app" class="container">
            <h1>Methods Computed</h1>
            <methods-computed
                :list.once="list">
            </methods-computed>
        </div>
    </body>
    <script type="text/javascript">
        var mixin ={
            data:{
                list:[
                    {title:'first item', read:true},
                    {title:'second item', read:false},
                    {title:'third', read:true}
                ],
            },
        }
    </script>
    <script src="{{asset('js/app.js')}}"></script>
</html>
