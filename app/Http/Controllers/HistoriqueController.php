<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
  public function formulaire ()
  {
      return view('historique');
  }

  public function traitement()
  {
      $donne_attribution = new App\Attribution;
      $donne_attribution->nom = request ('nom');
      $donne_attribution->poste = request ('poste');
      $donne_attribution->date = request ('date');
      $donne_attribution->heuredebut = request ('heuredebut');
      $donne_attribution->heurefin = request ('heurefin');

  }

  public function liste()
    {

       $donne_postes = \App\Poste::all();
       $donne_clients= \App\Visiteur::all();
       $donne_attributions= \App\Attribution::all();

        return view('historique', [
            'donne_postes' =>$donne_postes,
            'donne_clients' =>$donne_clients,
            'donne_attributions'=>$donne_attributions,

        ]);
    }
}
