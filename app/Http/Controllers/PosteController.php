<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosteController extends Controller
{
  public function traitement()
  {
      $donne_poste = new App\Poste;
      $donne_poste->nom = request ('nom');

  }
}
