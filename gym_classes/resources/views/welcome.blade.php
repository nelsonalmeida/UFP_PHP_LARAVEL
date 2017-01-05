<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gym Classes</title>

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
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">{{ trans('welcomeTrans.login') }}</a>
                    <a href="{{ url('/register') }}">{{ trans('welcomeTrans.register') }}</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ trans('welcomeTrans.hello') }}
                </div>

                <div class="links">
                  <img src="/images/GymClasses_Logo.png" style="..."/>
                    <!--AQUI E ONDE VAI FICAR A INFORMAÇAO VISIVEL A TODOS OS UTILIZADORES SEM NECESSIDADE DE REGISTO-->
                </div>
            </div>
        </div>
    </body>
    <b>@include('layouts.footer')</b>
</html>
