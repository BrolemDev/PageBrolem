<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        .wrapper {
            background-color: #fff;
            border-radius: 4px;
            max-width: 550px;
            width: 100%;
            margin: 100px 0;
            padding: 30px 50px;
            box-sizing: border-box;
        }

        .wrapper-td {
            padding: 0 10px;
        }

        .logo-wrap {
            text-align: center;
            padding: 16px 0;
            margin-bottom: 80px;
        }

        .text-body {
            line-height: 25px;
        }

        .text-wrap {
            text-align: center;
            margin: 40px 0;
        }

        .text-welcome {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .activation-link {
            display: inline-block;
            padding: 16px 50px;
            border-radius: 50px;
            background-color: #877BED;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            margin: 50px 0 60px;
        }

        .link-copy {
            opacity: .6;
            font-size: 14px;
            line-height: 24px;
        }
    </style>
    <table width="100%" style="background-color:#eee" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" class="wrapper-td">
                <div class="wrapper">
                    <div class="logo-wrap">
                        <img width="140px" src="{{ asset('images/brolemlogo.png') }}" alt="logo">
                    </div>
                    <div class="text-wrap">
                        <div class="text-welcome">Witaj na pokładzie,</div>
                        <p class="text-body">Dziękujemy za rejestrację w naszym serwisie!
                            <br>
                            Aby zweryfikować swój adres email wejdź w link poniżej.
                        </p>
                        <a href="URL" class="activation-link">Zweryfikuj swój email</a>
                        <div class="link-copy">
                            <div>Albo skopiuj link i wklej w pasku adresu przeglądarki</div>
                            <a href="URL">URl</a>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
