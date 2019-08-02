<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/liste_sorties','ListeSortiesController@index')->name('liste_sorties');



Route::get('/formulaire_sortie',function(){
    return view('formulaire_sortie');
});

Route::post('/formulaire_sortie_soumis','SortieController@formulaire')->name('formulaire');

Route::post('/inscription_sortie','SortieController@inscription_sortie')->name('inscription_sortie');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/details/{id}','SortieController@details');

Route::get('/profil/{id}','SortieController@profil');

Route::group(['middleware'=>['auth']],function(){

    Route::get('/nopermission','AdminController@nopermission')->name('nopersmission');

    Route::group(['middleware'=>['admin']],function(){
        Route::get('/admin','AdminController@index')->name('admin');
});
});
Route::get('/remove_user/{id}','AdminController@remove_user')->name('remove_user');
