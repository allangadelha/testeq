<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login | Teste Questa </title>

        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/fonts/font-awesome.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/officialstyle.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

        
        <style>
            html {  height: 100%; width: 100%; overflow: hidden }
            /*body { height: 100%; width: 100%; background-image: url("../images/login.jpg"); background-size: 100%; background-repeat: no-repeat; }*/
            body {
                height: 100%; width: 100%; background-size: 100%; background-repeat: no-repeat;
                -webkit-transition: background-image 0.2s ease-in-out;
                -moz-transition: background-image 0.50s ease-in-out;
                -ms-transition: background-image 0.50s ease-in-out;
                -o-transition: background-image 0.50s ease-in-out;
                transition: background-image 0.50s ease-in-out;
            }
            .mask { width: 100%; height: 100%; display: flex; align-items: center }

            .label-login { font-size: 12px; color: white; font-weight: 300!important; color: white!important }
            .links a {
                color: #525252;
                text-decoration: none;
                font-size: 11px;
                font-weight: lighter;
                text-align: center;
                transition: all cubic-bezier(0.8, -0.24, 0, 1.68) .9s;
            }
            .links a:hover{ color: #1ca97e; transition: all cubic-bezier(0.8, -0.24, 0, 1.68) .9s }
            .centro-form {     margin: 20% auto;
                               background: rgba(249, 249, 249,0.9);
                               max-width: 305px;
                               overflow: hidden;
                               padding: 0 2em;
                               padding-bottom: 1.2em;
                               box-shadow: 0px 0px 14px #888787;
                               -moz-box-shadow: 0px 0px 14px #888787;
            }
            .checkbox { color: #E2FFFA }
            .max { max-width: 370px }

            @media only screen and (max-width:900px){
                body{
                    background-image: none!important;
                    background-repeat: no-repeat;
                    background-color: #2e3191;
                }
            }
            .checkbox label, .radio label { color: #0b3524;    min-height: 20px;
                                            padding-left: 20px;
                                            margin-bottom: 0;
                                            font-weight: 400;
                                            cursor: pointer;
                                            font-size: 11px;
                                            line-height: 20px;
            }
            .centro-form img {
                margin-bottom: -11px;
                margin-top: -5px;
            }
            .pad-0 { padding: 0 }
        </style>
        <script>
            setInterval(changeimg, 8000);

            function changeimg() {
                var img = new Array(
                        "public/images/login.jpg",
                        "public/images/image01.jpg",
                        "public/images/image02.jpg",
                        "public/images/image03.jpg",
                        "public/images/image04.jpg",
                        "public/images/image05.jpg"
                        );

                i = Math.floor(Math.random() * 6);
                document.getElementById("imd").style.backgroundImage = "url(" + img[i] + ")";

            }
        </script>
    </head>
    <body id="imd" onload="changeimg();">
        <div class="mask">
            <div class="container" style=" display: flex; margin: 0 auto; align-items: center;">
                <div style="margin: 0 auto;">
                    <div class="centro-form">
                        <div class="col-sm-12 pad-0">
                            <h3 class="img-responsive"><a href="{{ URL::to('auth/login') }}"><img src="{{ asset('images/logo-questa.png') }}" style="width:100%"  alt="Logotipo"/></a></h3>
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form class="form-horizontal" role="form" method="post" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                            <fieldset>
                                <br>
                                <div class="form-group">
                                    {!! Form::email('email', '', ['class'=> 'form-control','autofocus','placeholder'=> 'E-mail']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::password('password', ['class'=> 'form-control','placeholder'=> 'Senha']) !!}
                                </div>
                                <button type="submit" class="btn btn-primary col col-lg-12">
                                    <i class="fa fa-btn fa-sign-in"></i>
                                    ENTRAR
                                </button>
                            </fieldset>

                            {{--<span class="links" style="text-align: center;"><a href="{{route('auth/register')}}">Registre-se </a> |</span>--}}

                            {{--<span class="links" style="text-align: center;"><a href="{{route('password/email')}}">Esqueci a senha</a></span>--}}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
