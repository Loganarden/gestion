<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModificationController extends Controller
{
  public function formulaire ()
  {
      return view('/modificationclient');
  }

  public function supprimerclient ($id)
  {
    \App\Visiteur::destroy($id);
      return redirect ('/nouveauxclient');
  }

  public function supprimerposte ($id)
  {
    \App\Poste::destroy($id);
      return redirect ('/nouveauxposte');
  }

  public function supprimerattribution ($id)
  {
    \App\Attribution::destroy($id);
      return redirect ('/historique');
  }

  public function modifierclient ($id, Request $request)
  {

   return view('/modificationclient');
  }

  public function editclient($id)
  {
    $client = \App\Visiteur::where('id', $id)->firstOrFail();
    return view('modificationclient',compact('client'));
  }

  public function updateclient($id, Request $request)
  {
    $client = \App\Visiteur::where('id', $id)->firstOrFail();
    $client->nomV = request ('nomV');
    $client->prenom = request ('prenom');
    $client->save();
    return redirect ('nouveauxclient');
  }

  public function editposte($id)
  {
    $poste = \App\Poste::where('id', $id)->firstOrFail();
    return view('modificationposte',compact('poste'));
  }

  public function updateposte($id, Request $request)
  {
    $poste = \App\Poste::where('id', $id)->firstOrFail();
    $poste->nom = request ('nom');
    $poste->save();
    return redirect ('nouveauxposte');
  }

  public function editattribution($id)
  {
    $attribution = \App\Attribution::where('id', $id)->firstOrFail();
    return view('modificationhistorique',compact('attribution'));
  }

  public function updateattribution($id, Request $request)
  {
    $attribution = \App\Attribution::where('id', $id)->firstOrFail();
    $attribution->nom = request ('nom');
    $attribution->poste = request ('poste');
    $attribution->date = request ('date');
    $attribution->heuredebut = request ('heuredebut');
    $attribution->heurefin = request ('heurefin');
    $attribution->save();
    return redirect ('historique');
  }

}
