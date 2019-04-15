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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth','prefix'=>'contato'], function(){
    Route::get('/', function(){
        return redirect('/contato/A');
    });
    Route::get('/lista', 'ContatoController@lista');

    Route::get('/add', 'ContatoController@create');
    Route::post('/', 'ContatoController@store');

    Route::get('/{id}/show', 'ContatoController@show');
    Route::get('/edit/{id}', 'ContatoController@edit');
    Route::put('{id}', 'ContatoController@update');
    Route::delete('{id}', 'ContatoController@destroy');

    Route::post('/busca', 'ContatoController@busca');
    Route::get('/{letra}', 'ContatoController@index');
});

    Route::post('/profile/update', 'UserController@profileUpdate');
    Route::get('/profile', 'UserController@profile');