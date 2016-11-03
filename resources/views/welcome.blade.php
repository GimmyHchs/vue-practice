<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .level {
                font-size: 30px;
                font-weight: 600;
            }
            .links {
                margin-bottom: 40px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }

            .m-b-md {
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel With Vue.js
                </div>
                <div>
                    <div class="level m-b-md">Basic Vue</div>
                    <div class="links">
                        <a href="{{url('/vue/default')}}">Default Component</a>
                        <a href="{{url('/vue/data-binding')}}">Data-Binding Component</a>
                        <a href="{{url('/vue/event-handle')}}">Event-Handle Component</a>
                        <a href="{{url('/vue/for-list')}}">For-List Component</a>
                        <a href="{{url('/vue/pass-variable')}}">Pass Variable into Component</a>
                    </div>
                </div>
                <div>
                    <div class="level m-b-md">Advance Vue</div>
                    <div class="links">
                        <a href="{{url('/vue/methods-computed')}}">Methods-Computed</a>
                        <a href="{{url('/vue/article/all')}}">Get-Articles-From-DB</a>
                        <a href="{{url('/vue/article/resource')}}">Vue-Resource(Ajax)</a>
                        <a href="{{url('/vue/transition')}}">Transition</a>
                    </div>
                    <div class="level m-b-md">Mix Vue</div>
                    <div class="links">
                        <a href="{{url('/vue/article/crud')}}">Vue-CRUD(Ajax&transition)</a>
                        <a href="{{url('/vue/first-chart')}}">Vue-Mix-ChartJs</a>
                        <a href="{{url('/vue/charts')}}">Vue-ChartJs-Components</a>
                        <a href="{{url('/vue/vue-chartjs-lib')}}">Vue-ChartJs-Lib</a>
                    </div>
                    <div class="level m-b-md">Vuex</div>
                    <div class="links">
                        <a href="{{url('/vuex/root')}}">Vuex-Root</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
