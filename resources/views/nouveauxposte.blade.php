@extends ('layout')

    @section('css')

        <link href="{{asset ('css/nouveauxposte.css')}}" rel="stylesheet" />

    @endsection

    @section('contenu')

                <div class= "ordi1">

                  <fieldset>

                    <legend> Ajouter un poste </legend>

                  <form action="/nouveauxposte" method="post">
                          {{ csrf_field() }}

                          <p> <input type="nom" name="nom" placeholder="Nom" ></p>

                          @if($errors->has('nom'))
                          <p>{{$errors->first ('nom') }}</p>
                          @endif

                          <p><input class="sb" type="submit" value="Ajouter"></p>

                      </form>

                  </fieldset>

                </div>

                <div class= "lst1">

                  <div class="lst2"

                  <p>Liste des pc disponible :</p>


                    @foreach($donne_postes as $donne_poste)
                    <li>

                      {{ $donne_poste->nom}}

                      <table>

                        <tr>
                          {{Form::model($donne_poste,['url'=>URL::action('ModificationController@supprimerposte',$donne_poste),'method'=>'DELETE'])}}
                          {{Form::submit('supprimer', ['class'=>'button-s'])}} {{Form::close()}}
                        </tr>

                        <tr>
                          <a class="button" href="{{ URL::action('ModificationController@editposte', $donne_poste->id) }}">Modifier</a>
                        </tr>

                      </table>

                    </li>

                     @endforeach
                  </div>

                </div>


    @endsection
