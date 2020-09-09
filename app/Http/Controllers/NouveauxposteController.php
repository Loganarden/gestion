<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NouveauxposteController extends Controller
{
  public function formulaire ()
  {
      return view('nouveauxposte');
  }

  public function traitement ()
  {
      request()-> validate([

          'nom' => ['required'],
      ]);

      $poste = new \App\Poste;
      $poste->nom = request ('nom');
      $poste->save();

          return redirect ('/nouveauxposte');
  }

  public function liste()
    {

       $donne_postes = \App\Poste::all();

        return view('nouveauxposte', [
            'donne_postes' =>$donne_postes,

        ]);
    }

}
