@extends ('layout')

    @section('css')

        <link href="{{asset ('css/gestion.css')}}" rel="stylesheet" />

    @endsection

    @section('contenu')


                  <div class="title m-b-md" >

                       Modification

                  </div>

                  {{ Form::model($attribution , [ 'url' => URL::action('ModificationController@updateattribution', $attribution ), 'method' => 'post'])}}
                  <p>{{ Form::label('title', 'NOM :') }} {{ Form::textarea('nom') }}</p>
                  <p>{{ Form::label('title', 'Poste :') }} {{ Form::textarea('poste') }}</p>
                  <p>{{ Form::label('title', 'Date :') }} {{ Form::textarea('date') }}</p>
                  <p>{{ Form::label('title', 'Heure de début :') }} {{ Form::textarea('heuredebut') }}</p>
                  <p>{{ Form::label('title', 'Heure de fin :') }} {{ Form::textarea('heurefin') }}</p>
                  {{ Form::submit() }}
                  {{ Form::close() }}


    @endsection
