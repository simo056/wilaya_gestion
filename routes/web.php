<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
Auth::routes();
Auth::routes(['register' => false]); 
Route::group(['middleware'=>['guest']], function(){
    Route::get('/', function () {
        return view('auth.login');
    });

});



Route::get('/ajouter','HomeController@ajouter');
Route::get('/consulter/{id}','HomeController@consulter');
Route::get('/Corbeille','HomeController@Corbeille');
Route::get('/restaurer/{id}','HomeController@restaurer');
Route::get('/modifier/{id}','HomeController@modifier');
Route::post('/saveajouter','HomeController@saveajouter');
Route::post('/savemodifier','HomeController@savemodifier');
Route::get('/annuler/{id}','HomeController@annuler');
Route::get('/resolu/{id}','HomeController@resolu');
Route::get('/supprimer/{c}','HomeController@supprimer'); //dans le lien donnee /supprimer/{$m->id_act..}
Route::get('/ajouter_utilisateur','HomeController@ajouter_user');



Route::get('/supprimer_thematique/{id}','ThematiqueController@supprimer_thematique');
Route::post('/ajouter_thematique','ThematiqueController@ajouter_thematique');
Route::get('/Modifier_thematique/{id}','ThematiqueController@Modifier_thematique');
Route::post('/save_modifier_thematique','ThematiqueController@save_modifier_thematique');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/thematiques', 'ThematiqueController@index')->name('thematique.index');
Route::get('/utilisateurs', 'UtilisateurController@index')->name('utilisateur.index');


Route::get('/user/create', 'UtilisateurController@create')->name('utilisateur.create');
Route::post('/user/store', 'UtilisateurController@store')->name('utilisateur.store');
Route::get('/utilisateurs/{id}', 'UtilisateurController@destroy')->name('utilisateur.destroy');
Route::get('/edite/{id}','UtilisateurController@edite');
Route::post('/save_edite','UtilisateurController@save_edite');
Route::get('/consulter1/{id}','UtilisateurController@consulter');

// Route::get('/utilisateurs', 'UtilisateurController@liste')->name('utilisateurs.liste');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/register',function () {
    return redirect('login');
})
?>

