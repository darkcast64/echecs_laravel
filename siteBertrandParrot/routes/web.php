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

Route::get('/liste_sorties','ListeSortiesController@index');



Route::get('/formulaire_sortie',function(){
    return view('formulaire_sortie');
});

Route::post('/formulaire_sortie_soumis','SortieController@formulaire')->name('formulaire');

Route::post('/inscription_sortie','SortieController@inscription_sortie')->name('inscription_sortie');
