<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NouveauxclientController extends Controller
{
  public function formulaire ()
  {
      return view('nouveauxclient');
  }

  public function traitement ()
  {
      request()-> validate([

          'nomV' => ['required'],
          'prenom' => ['required'],
      ]);

      $client = new \App\Visiteur;
      $client->nomV = request ('nomV');
      $client->prenom = request ('prenom');
      $client->save();

          return redirect ('/nouveauxclient');
  }

  public function liste()
    {
        $donne_clients = \App\Visiteur::all();

        return view('nouveauxclient', [
            'donne_clients' =>$donne_clients,

        ]);
    }

}
