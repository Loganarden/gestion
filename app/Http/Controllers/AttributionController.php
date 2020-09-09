<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttributionController extends Controller
{
  public function formulaire ()
  {
      return view('attribution');
  }

  public function traitement ()
  {
      request()-> validate([

          'nom' => ['required'],
          'poste' =>['required'],
          'date' =>['required'],
          'heuredebut' => ['required'],
          'heurefin' => ['required'],
      ]);

      $donne = new \App\Attribution;
      $donne->nom = request ('nom');
      $donne->poste = request ('poste');
      $donne->date = request('date');
      $donne->heuredebut = request ('heuredebut');
      $donne->heurefin = request('heurefin');
      $donne->save();

          return redirect ('/attribution');
  }

  public function liste()
    {

       $donne_postes = \App\Poste::all();
       $donne_clients= \App\Visiteur::all();
       $donne_attributions= \App\Attribution::all();

        return view('attribution', [
            'donne_postes' =>$donne_postes,
            'donne_clients' =>$donne_clients,
            'donne_attributions'=>$donne_attributions,

        ]);
    }
}
