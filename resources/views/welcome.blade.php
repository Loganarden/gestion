@extends ('layout')

    @section('css')

    <link href="{{asset ('css/welcome.css')}}" rel="stylesheet" />

    @endsection

    @section('contenu')

                <div class="title m-b-md">
                   Bienvenue sur votre logiciel de gestion.
                </div>

                <div>

                   <p><a href="/connexion" class="btn btn-connexion">connectez-vous</a></p>

                </div>



    @endsection
