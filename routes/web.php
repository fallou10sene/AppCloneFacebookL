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

Route::get('/', function () { return view('auth/login');});





Auth::routes();

Route::get('/accueil', 'HomeController@index')->name('accueil');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::post('/amie/{id}', 'AmieController@save');
//Route::get('/supprimer', 'SupprimerController@deleteami');
Route::resource('events', 'EventsController');
Route::get('/events', 'EventsController@index')->name('home');

//Route::get('/amie/{$user}', 'HomeController@store')->name('amie');
Route::get('/amie/{user}', 'HomeController@store')->name('amie');
Route::delete('/amie/delete/{amie}', 'HomeController@destroy')->name('amie.delete');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::put('/update/{id}', 'HomeController@update')->name('update');
Route::post('/publier', 'HomeController@publier')->name('publier');
Route::get('/groupe/{id}', 'HomeController@groupe')->name('groupe');

//Route::patch('/update/{id}/', ['as' => 'user.update', 'uses' => 'HomeController@update'])->name('update');
