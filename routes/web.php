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
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('profile', 'UserController', [
        'only' => ['edit', 'update'],
        'parameters' => ['profile' => 'user']
    ]);
});

// routes accueil & déconnexion

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

// routes liées aux équidés

Route::get('horses/listHorses', 'HorsesController@index')->name('listHorses');

Route::get('horses/listHorsesArchive', 'HorsesController@indexArchive')->name('listHorsesArchive');

Route::get('horses/newHorse', function () {
    return view('horses/newHorse');
})->name('newHorse');

Route::post('horses/newHorse','HorsesController@create')->name('createHorse');

Route::get('horses/horse/{id}', 'HorsesController@show');

Route::get('horses/horseArchive/{id}', 'HorsesController@showArchive');

Route::get('horses/modifyHorse/{id}', 'HorsesController@edit');

Route::post('horses/modifyHorse/{id}','HorsesController@update');

Route::get('/deleteHorse/{id}', 'HorsesController@destroy');

// routes liées aux cavaliers

// route Archives
Route::get('/archives', function () {
    return view('archives');
})->name('archives');