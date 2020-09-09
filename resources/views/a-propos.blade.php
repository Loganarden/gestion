@extends ('layout')

    @section('css')

        <link href="{{asset ('css/a-propos.css')}}" rel="stylesheet" />

    @endsection

    @section('contenu')

        <div class="titre" >

             Ce-ci est un site de gestion de poste informatique !

        </div>

                <div class= "par_1">

                    <p>
                      Ce-ci est un logiciel de gestion crée pour que le/la secrétaire du centre qui gère l’attribution des postes puisse
                      faire son travaille avec plus de faciliter.
                      <br />Elle pourra donc :
                      <br />Ce connecter à une interface sécurisée.
                      <br />Créer / modifier / supprimer un utilisateur.
                      <br />Créer / modifier / supprimer un ordinateur.
                      <br />Attribuer un ordinateur à un utilisateur à une date et sur un créneau horaire.
                      <br />Voir et modifier toutes les attributions.
                    </p>

                </div>

    @endsection
