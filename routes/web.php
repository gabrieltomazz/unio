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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('projetos', 'ProjetoController');
Route::get('/projetos/departamento/{departamento_id}', 'ProjetoController@departamento');



Route::group(['middleware' => 'auth'], function () { 

	Route::resource('projetos', 'ProjetoController');


});
