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



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/thematiques', 'ThematiqueController@index')->name('thematique.index');
Route::get('/utilisateurs', 'UtilisateurController@index')->name('utilisateur.index');
// Route::get('/utilisateurs', 'UtilisateurController@liste')->name('utilisateurs.liste');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/register',function () {
    return redirect('login');
})
?>
