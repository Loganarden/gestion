@extends ('layout')

    @section('css')

        <link href="{{asset ('css/gestion.css')}}" rel="stylesheet" />

    @endsection

    @section('contenu')


                  <div class="title m-b-md" >

                       Modification

                  </div>

                  {{ Form::model($client , [ 'url' => URL::action('ModificationController@updateclient', $client ), 'method' => 'post'])}}
                  <p>{{ Form::label('title', 'NOM :') }} {{ Form::textarea('nomV') }}</p>
                  <p>{{ Form::label('content', 'Prenom :') }} {{ Form::textarea('prenom') }}</p>
                  {{ Form::submit() }}
                  {{ Form::close() }}


    @endsection
