<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', 'InscriptionController@formulaire');
route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('connexion', 'ConnexionController@traitement');

Route::get('/mon-compte', 'MoncompteController@accueil');
Route::get('/deconnexion','MoncompteController@deconnexion');

Route::get('/nouveauxposte', 'NouveauxposteController@formulaire');
Route::post('nouveauxposte', 'NouveauxposteController@traitement');
Route::get('/nouveauxposte', 'NouveauxposteController@liste');
Route::get('/postes/{id}/editposte','ModificationController@editposte');
Route::post('/postes/{id}/updateposte','ModificationController@updateposte');

Route::get('/nouveauxclient', 'NouveauxclientController@formulaire');
Route::post('nouveauxclient', 'NouveauxclientController@traitement');
Route::get('/nouveauxclient', 'NouveauxclientController@liste');
Route::get('/visiteurs/{id}/editclient','ModificationController@editclient');
Route::post('/visiteurs/{id}/updateclient','ModificationController@updateclient');

Route::get('/modificationclient', 'ModificationController@formulaire');
Route::delete('visiteurs/{id}/supprimerclient', 'ModificationController@supprimerclient');
Route::delete('postes/{id}/supprimerposte', 'ModificationController@supprimerposte');
Route::delete('attributions/{id}/supprimerattribution', 'ModificationController@supprimerattribution');

Route::get('/attribution', 'AttributionController@formulaire');
Route::post('/attribution', 'AttributionController@traitement');
Route::get('/attribution', 'AttributionController@liste');
Route::get('/attributions/{id}/editattribution','ModificationController@editattribution');
Route::post('/attributionrs/{id}/updateattribution','ModificationController@updateattribution');

Route::get('/historique', 'HistoriqueController@formulaire');
Route::get('/historique', 'HistoriqueController@liste');

Route::get('/a-propos', 'AproposController@liste');
