{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>Convidar Empreendedor</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

{{--    <!-- Styles -->--}}
{{--    <style>--}}
{{--        html, body {--}}
{{--            background-color: #fff;--}}
{{--            color: #636b6f;--}}
{{--            font-family: 'Raleway', sans-serif;--}}
{{--            font-weight: 100;--}}
{{--            height: 100vh;--}}
{{--            margin: 0;--}}
{{--        }--}}

{{--        .full-height {--}}
{{--            height: 100vh;--}}
{{--        }--}}

{{--        .flex-center {--}}
{{--            align-items: center;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--        }--}}

{{--        .position-ref {--}}
{{--            position: relative;--}}
{{--        }--}}

{{--        .top-right {--}}
{{--            position: absolute;--}}
{{--            right: 10px;--}}
{{--            top: 18px;--}}
{{--        }--}}

{{--        .content {--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        .title {--}}
{{--            font-size: 84px;--}}
{{--        }--}}

{{--        .links > a {--}}
{{--            color: #636b6f;--}}
{{--            padding: 0 25px;--}}
{{--            font-size: 12px;--}}
{{--            font-weight: 600;--}}
{{--            letter-spacing: .1rem;--}}
{{--            text-decoration: none;--}}
{{--            text-transform: uppercase;--}}
{{--        }--}}

{{--        .m-b-md {--}}
{{--            margin-bottom: 30px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="flex-center">--}}
{{--    <h2>Você foi convidado para fazer parte de um plano de Negócio !</h2> <br/>--}}
{{--</div>--}}
{{--<div class="flex-center position-ref full-height">--}}
{{--    <h5>Esta é seu e-mail: {{$user->email}}</h5>--}}
{{--    <br/>--}}
{{--    <h5>Esta é sua senha de acesso: {{$password}}</h5>--}}
{{--    <br/>--}}

{{--    <h5>Acesse o Gerenciador Pampatec através do link: <a href="{{url('/')}}">Link do Gerenciador Pampatec</a></h5>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 40px 0 30px 0;">
                        <img src="{{ URL::to('/assets/img/logo.png') }}" alt="Gerenciador PampaTec" width="300" height="150"
                             style="display: block;" />
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                    Você foi convidado para um plano de negócio !
                                </td>
                            </tr>
                            <tr>
                                <td
                                        style="padding: 20px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                    Este é o seu e-mail: {{$user->email}}
                                </td>
                            </tr>
                            <tr>
                                <td
                                        style="padding: 3px 0 0px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                    Esta é a sua senha: {{$password}}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#b3ffb3" style="padding: 20px 20px 20px 20px; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                        Acesse o Gerenciador do PampaTec através do Link:  <a href="{{url('/')}}">Link do Gerenciador Pampatec</a></h5>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>