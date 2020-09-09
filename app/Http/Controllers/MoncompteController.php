<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoncompteController extends Controller
{
  public function accueil ()
  {
      if (auth()->guest())
      {
          return redirect('/connexion')->withErrors([
              'email' => "vous devez vous connecté !"
          ]);
      }

      return view ('mon-compte');
  }

  public function deconnexion()
  {
      auth()->logout();

      return redirect('/');
  }
}
