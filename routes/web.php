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
    return view('accueil');
});


Route::get('/resultats', function () {
    return view('resultats');
});

Route::get('/mentions_legales', function () {
    return view('accueil');
});

Route::get('/messagerie', function () {
    return view('messagerie');
});

Auth::routes();
Route::get('/home', 'ConversationsController@index')->name('home');
Route::get('/conversations', 'ConversationsController@index')->name('conversations');
Route::get('/conversations/{id}', 'ConversationsController@show')->name('conversations.show');
Route::get('/accueil', 'HomeController@accueil')->name('accueil');

Route::get('/resultat', 'HomeController@resultat')->name('resultat');

Route::resource('shares', 'ShareController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/accueil', 'HomeController@accueil')->name('accueil');
Route::get('/profil', 'ProfilController@profil')->name('profil');
Route::get('/depot', 'ProfilController@depot')->name('depot');
Route::get('/fiche/{id}', 'HomeController@fiche')->name('fiche');
Route::get('/cu', 'HomeController@cu')->name('cu');
Route::get('/ml', 'HomeController@ml')->name('ml');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/favoris', 'HomeController@favoris')->name('favoris');
Route::get('/coordonnees', 'HomeController@coordonnees')->name('coordonnees');
Route::get('/ccm', 'HomeController@ccm')->name('ccm');
Route::get('/mesdepots', 'HomeController@mesdepots')->name('mesdepots');
Route::get('/login', "Auth\LoginController@showLoginForm")->name('login');
Route::get('/logout', "Auth\LoginController@logout");
Route::get('/resultats', "HomeController@resultats");

Route::post('/depot/add', "DepotController@add");
