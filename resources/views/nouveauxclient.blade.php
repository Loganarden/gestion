@extends ('layout')

    @section('css')

        <link href="{{asset ('css/nouveauxclient.css')}}" rel="stylesheet" />

    @endsection

    @section('contenu')

                <div class= "ordi1">

                  <fieldset>

                    <legend> Ajouter un client </legend>

                  <form action="/nouveauxclient" method="post">
                          {{ csrf_field() }}

                          <p> <input type="nom" name="nomV" placeholder="Nom" ></p>

                          @if($errors->has('nomV'))
                          <p>{{$errors->first ('nomV') }}</p>
                          @endif

                          <p> <input type="prenom" name="prenom" placeholder="prenom" ></p>

                          @if($errors->has('prenom'))
                          <p>{{$errors->first ('prenom') }}</p>
                          @endif

                          <p><input class="sb" type="submit" value="Ajouter"></p>

                      </form>

                  </fieldset>

                </div>

                <div class= "lst1">

                  <div class="lst2">

                    <p>Liste des personnes inscrite :</p>


                        @foreach($donne_clients as $donne_client)

                            <li>

                              {{$donne_client->prenom}} {{ $donne_client->nomV}}

                              <table>

                                <tr>
                                  {{Form::model($donne_client,['url'=>URL::action('ModificationController@supprimerclient',$donne_client),'method'=>'DELETE'])}}
                                  {{Form::submit('supprimer', ['class'=>'button-s'])}} {{Form::close()}}
                                </tr>

                                <tr>
                                  <a class="button" href="{{ URL::action('ModificationController@editclient', $donne_client->id) }}">Modifier</a>
                                </tr>

                              </table>

                            </li>
                        @endforeach
                  </div>

                </div>


    @endsection
