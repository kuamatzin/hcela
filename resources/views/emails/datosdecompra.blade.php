<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css" rel="stylesheet" media="all">
        /* Media Queries */
        @media only screen and (max-width: 500px) {
        .button {
        width: 100% !important;
        }
        }
        </style>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <?php
    $style = [
    /* Layout ------------------------------ */
    'body' => 'margin: 0; padding: 0; width: 100%; background-color: #F2F4F6;',
    'email-wrapper' => 'width: 100%; margin: 0; padding: 0; background-color: #F2F4F6;',
    /* Masthead ----------------------- */
    'email-masthead' => 'padding: 25px 0; text-align: center;',
    'email-masthead_name' => 'font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;',
    'email-body' => 'width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;',
    'email-body_inner' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0;',
    'email-body_cell' => 'padding: 35px;',
    'email-footer' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center;',
    'email-footer_cell' => 'color: #AEAEAE; padding: 35px; text-align: center;',
    /* Body ------------------------------ */
    'body_action' => 'width: 100%; margin: 30px auto; padding: 0; text-align: center;',
    'body_sub' => 'margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;',
    /* Type ------------------------------ */
    'anchor' => 'color: #3869D4;',
    'header-1' => 'margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;',
    'paragraph' => 'margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;',
    'paragraph-sub' => 'margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;',
    'paragraph-center' => 'text-align: center;',
    /* Buttons ------------------------------ */
    'button' => 'display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
    background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
    text-align: center; text-decoration: none; -webkit-text-size-adjust: none;',
    'button--green' => 'background-color: #22BC66;',
    'button--red' => 'background-color: #dc4d2f;',
    'button--blue' => 'background-color: #3869D4;',
    ];
    ?>
    <?php $fontFamily = 'font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;'; ?>
    <body style="{{ $style['body'] }}">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td style="{{ $style['email-wrapper'] }}" align="center">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <!-- Logo -->
                        <tr>
                            <td style="{{ $style['email-masthead'] }}">
                                <a style="{{ $fontFamily }} {{ $style['email-masthead_name'] }}" href="{{ url('/') }}" target="_blank">
                                    HerramientasCela
                                </a>
                            </td>
                        </tr>
                        <!-- Email Body -->
                        <tr>
                            <td style="{{ $style['email-body'] }}" width="100%">
                                <table style="{{ $style['email-body_inner'] }}" align="center" width="570" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="{{ $fontFamily }} {{ $style['email-body_cell'] }}">
                                            <!-- Greeting -->
                                            <h1 style="{{ $style['header-1'] }}">
                                            Detalles de compra
                                            </h1>
                                            <br>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Producto</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($items as $key => $item)
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://www.hcela.inovuz.com/{{$item->image}}" style="width: 72px; height: 72px;"> </a>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading"><a href="#">
                                                                        {{$item->description}}</a></h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                            <td>   </td>
                                                            <td>   </td>
                                                            <td><h3>Total</h3></td>
                                                            <td class="text-right">
                                                                <h3>
                                                                <strong>${{money_format('%.2n', $amount/100)}}</strong>
                                                                </h3>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>   </td>
                                                            <td>   </td>
                                                            <td>   </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <!-- Salutation -->
                                            <p style="{{ $style['paragraph'] }}">
                                                Saludos,<br>HerramientasCela
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- Footer -->
                        <tr>
                            <td>
                                <table style="{{ $style['email-footer'] }}" align="center" width="570" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="{{ $fontFamily }} {{ $style['email-footer_cell'] }}">
                                            <p style="{{ $style['paragraph-sub'] }}">
                                                &copy; {{ date('Y') }}
                                                <a style="{{ $style['anchor'] }}" href="{{ url('/') }}" target="_blank">Pokepizzas</a>.
                                                Todos los derechos reservados.
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>