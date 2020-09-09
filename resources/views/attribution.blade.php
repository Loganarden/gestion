@extends ('layout')

    @section('css')

        <link href="{{asset ('css/attribution.css')}}" rel="stylesheet" />

    @endsection

    @section('contenu')

                <div class= "ordi1">

                  <fieldset>

                    <legend> Attribution de poste </legend>

                  <form action="/attribution" method="post">
                          {{ csrf_field() }}

                          <input list="nom" type"nom" name="nom" placeholder="Client">

                        <datalist id=nom>

                        <option>
                              @foreach($donne_clients as $donne_client)

                             <option>

                                {{$donne_client->prenom}} {{$donne_client->nomV}}

                              </option>

                               @endforeach
                            </option>

                          </datalist>

                          @if($errors->has('client'))
                          <p>{{$errors->first ('client') }}</p>
                          @endif

                          <input list="poste" type"poste" name="poste" placeholder="Poste">

                        <datalist id=poste>

                            <option>
                              @foreach($donne_postes as $donne_poste)

                              <option>
                                {{$donne_poste->nom}}
                              </option>

                               @endforeach
                            </option>

                          </datalist>

                          @if($errors->has('poste'))
                          <p>{{$errors->first ('poste') }}</p>
                          @endif

                          <input type="date"  name="date" min="2020-01-01" placeholder="Le :">

                          @if($errors->has('date'))
                          <p>{{$errors->first ('date') }}</p>
                          @endif

                          <input type="time"  name="heuredebut" placeholder="De :">

                          @if($errors->has('heuredebut'))
                          <p>{{$errors->first ('heuredebut') }}</p>
                          @endif

                          <input type="time"  name="heurefin" placeholder="A :" >

                          @if($errors->has('heurefin'))
                          <p>{{$errors->first ('heurefin') }}</p>
                          @endif

                          <p><input type="submit" value="Valider"></p>

                      </form>

                  </fieldset>

                </div>

    @endsection
