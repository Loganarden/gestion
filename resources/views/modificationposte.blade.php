@extends ('layout')

    @section('css')

        <link href="{{asset ('css/gestion.css')}}" rel="stylesheet" />

    @endsection

    @section('contenu')


                  <div class="title m-b-md" >

                       Modification

                  </div>

                  {{ Form::model($poste , [ 'url' => URL::action('ModificationController@updateposte', $poste ), 'method' => 'post'])}}
                  <p>{{ Form::label('title', 'Poste :') }} {{ Form::textarea('nom') }}</p>
                  {{ Form::submit() }}
                  {{ Form::close() }}


    @endsection
