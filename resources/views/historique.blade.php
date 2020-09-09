@extends ('layout')

    @section('css')

        <link href="{{asset ('css/historique.css')}}" rel="stylesheet" />

    @endsection

    @section('contenu')

                <div class= "lst1">
                  <p>Historique des attribution :</p>

                     @foreach($donne_attributions as $donne_attribution)

                          <li>

                             {{ $donne_attribution->nom}} sur le  {{ $donne_attribution->poste}} le : {{ $donne_attribution->date}} de: {{ $donne_attribution->heuredebut}} à : {{ $donne_attribution->heurefin}}
                             <table>

                               <tr>
                                 {{Form::model($donne_attribution,['url'=>URL::action('ModificationController@supprimerattribution',$donne_attribution),'method'=>'DELETE'])}}
                                 {{Form::submit('supprimer', ['class'=>'button-s'])}} {{Form::close()}}
                               </tr>

                               <tr>
                                 <a class="button" href="{{ URL::action('ModificationController@editattribution', $donne_attribution->id) }}">Modifier</a>
                               </tr>

                             </table>

                          </li>

                      @endforeach
                </div>



    @endsection
