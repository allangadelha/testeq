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

    
Route::get('/', 'UsuariosController@index');
Route::group(['prefix' => 'usuarios'], function(){
    Route::get('', ['as' => 'usuarios', 'uses' => 'UsuariosController@index']);
    Route::get('show', ['as' => 'usuarios.show', 'uses' => 'UsuariosController@show']);
    Route::get('index', ['as' => 'usuarios.index', 'uses' => 'UsuariosController@index']);
    Route::get('create', ['as' => 'usuarios.create', 'uses' => 'UsuariosController@create']);
    Route::post('store', ['as' => 'usuarios.store', 'uses' => 'UsuariosController@store']);
    Route::get('edit/{id}', ['as' => 'usuarios.edit', 'uses' => 'UsuariosController@edit']);
    Route::put('update/{id}', ['as' => 'usuarios.update', 'uses' => 'UsuariosController@update']);
    Route::get('destroy/{id}', ['as' => 'usuarios.destroy', 'uses' => 'UsuariosController@destroy']);
 });   
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
