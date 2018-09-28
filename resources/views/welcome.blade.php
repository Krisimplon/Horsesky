<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HorseSky</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css" />
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1 id="titleLogiciel">HorseSky</h1>
                <a class="btn-taupeFonce btn-firstPage" href="{{ route ('login') }}">Se connecter</a>
            </div>
        </div>
    </body>
</html>
