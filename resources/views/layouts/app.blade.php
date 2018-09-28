<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HorseSky</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@auth
    <div id="app">
        <div class="fluid-container">
            <div class="row">
                <div id="menu" class="col-sm-3 navbar-fixed-left ">
                    <nav class="nav flex-column">
                        <div class="titleLogiciel">
                            HorseSky
                        </div>
                        <a class="nav-link active" href="{{ route ('listHorses') }}"><img src="/images/horse.svg" class="iconMenu" />Equidés</a>
                        <a class="nav-link" href="#"><img src="/images/riders.svg" class="iconMenu" />Cavaliers</a>
                        <a class="nav-link" href="#"><img src="/images/veterinary.svg" class="iconMenu" />Suivi vétérinaire</a>
                        <a class="nav-link" href="#"><img src="/images/users.svg" class="iconMenu" />Utilisateurs</a>
                        <a class="nav-link" href="{{ route ('archives') }}"><img src="/images/archive.svg" class="iconMenu" />Archives</a>
                    </nav>
                </div>
                <div class="col-sm-8">
                    <div class="row justify-content-end">
                        <nav class="navbar navbar-expand-md navbar-light authBlade">
                            <div class="col">
                                <span class="userName">{{ Auth::user()->pseudo }}</span>
                                <a href="{{ route ('profil') }}"><img src="/images/user.svg" class="iconNav" /> Mon compte</a>
                                <a href="{{ route ('logout') }}"><img src="/images/logout.svg" class="iconNav" /> Déconnexion</a>
                                </div>
                            </div>
                        </nav>
                        <div class="col-sm-12 contentBloc">
                            <main class="py-4">
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endauth
</body>
</html>
