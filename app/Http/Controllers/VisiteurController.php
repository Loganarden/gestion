<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiteurController extends Controller
{
  public function traitement()
  {
      $donne_client = new App\Visiteur;
      $donne_client->nomV = request ('nomV');
      $donne_client->prenom = request ('prenom');

  }
}
