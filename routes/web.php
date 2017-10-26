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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('projetos', 'ProjetoController');
Route::get('/projetos/departamento/{departamento_id}', 'ProjetoController@departamento');

    // blogroll to show all blog posts
    // Route::get('/projetos/departamento/{departamento_id?}', function($departamento_id = null)
    // {
    //     // get all the blog stuff from database
    //     // if a departamento_id was passed, use that
    //     // if no departamento_id, get all posts
    //     if ($departamento_id)
    //         $projetos = Projeto::where('departamento_id', '=', $departamento_id);
    //     else
    //         $projetos = Projeto::all();

    //     // show the view with blog posts (app/views/blog.blade.php)
    //     return View::make('projetos.departamento')
    //         ->with('projetos', $projetos);
    // });
