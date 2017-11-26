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
Route::get('/projetos/departamento/{departamento_id}', 'ProjetoController@departamento');

Route::get('/alunos', 'AlunoController@index');
Route::get('/alunos/departamento/{departamento_id}', 'AlunoController@departamento');
// Route::get('/projetos', 'ProjetoController@index');
// Route::get('/projetos/{projeto}', 'ProjetoController@show');
//Route::get('/departamentos','Departamento@getListDepartamentos');

Route::group(['middleware' => 'auth'], function () { 
	Route::resource('projetos', 'ProjetoController'); 
	
	// Route::post('/projetos', 'ProjetoController@store');
	// Route::get('/projetos/create', 'ProjetoController@create');
	// Route::get('/projetos/{projetos}', 'ProjetoController@update');
	// Route::post('/projetos/{projetos}','ProjetoController@destroy');
	// Route::get('/projetos/{projetos}/edit','ProjetoController@edit');

});
