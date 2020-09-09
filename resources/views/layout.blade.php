<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion</title>

        @yield('css')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset ('css/bardemenu.css')}}" rel="stylesheet" />

    </head>
    <body>

            <div class="nav">

                <ul>
                    @if(auth()->check())

                        <li><a class="active" href="/mon-compte">Accueil</a></li>
                        <li><a  href="/nouveauxposte">Ajouté un Poste</a></li>
                        <li><a  href="/nouveauxclient">Ajouté un Client</a></li>
                        <li><a  href="/attribution">Attribution</a></li>
                        <li><a  href="/historique">Historique des attribution</a></li>

                    @else

                        <li><a class="active" href="/">Accueil</a></li>

                    @endif

                    <li><a  href="a-propos">A propos</a></li>

                        @if(auth()->check())

                        <li style="float:right"><a style="background-color: rgba(196, 4, 4, 0.555);" href="/deconnexion" >Déconnexion</a></li>
                        <li style="float:right"><a  href="/mon-compte">Mon-compte</a></li>
                        <li style="float:right"><a  href="/inscription">Inscription Admin</a></li>

                        @else

                            <li style="float:right"><a  href="/connexion">Connexion</a></li>
                            <li style="float:right"><a  href="/inscription">Inscription Admin</a></li>

                        @endif

                </ul>

            </div>

        <div class="flex-center position-ref full-height">

            <div class="content">

                @yield('contenu')

            </div>
        </div>
    </body>
</html>
