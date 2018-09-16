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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Auth::routes();
});

Route::get('auth/google', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('auth/facebook', 'Auth\RegisterController@redirectFacebook');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleFacebook');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Local API
Route::prefix('lapi')->namespace('Lapi')->group(function () {
    Route::get('/games', 'GameController@index');
    Route::get('/game/{id}', 'GameController@show');

    Route::get('/events', 'EventController@index');
    Route::get('/event/{id}', 'EventController@show');

    Route::get('/teams', 'TeamController@index');
    Route::get('/team/{id}', 'TeamController@show');
    Route::post('/teams/create', 'TeamController@store');
});

// TODO: will this take twice as long, or be twice as good?
Route::get('/{any}', 'SpaController@index')->where('any', '.*');
