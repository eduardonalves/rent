<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
     return view('home');
});
Route::get('home', function () {
       return view('teste');
});
//Rotas dos imóveis
Route::get('imoveis/cadastrar', function () {
       return view('imoveis.cadastrar');
});

Route::get('imoveis/listar', function () {
       return view('imoveis.listar');
});

Route::get('imoveis/ver/{id}', function () {
       return view('imoveis.ver');
});
Route::get('imoveis/editar/{id}', function () {
       return view('imoveis.editar');
});
//Rota dos usuários
Route::get('usuarios/cadastrar', function () {
       return view('usuarios/.cadastrar');
});

//Rotas dos proprietarios
Route::get('proprietarios/cadastrar', function () {
       return view('proprietarios/.cadastrar');
});
Route::get('proprietarios/listar', function () {
       return view('proprietarios/.listar');
});
Route::get('proprietarios/ver/{id}', function () {
       return view('proprietarios.ver');
});
Route::get('proprietarios/editar/{id}', function () {
       return view('proprietarios.editar');
});

//Rotas dos locatários
Route::get('locatarios/cadastrar', function () {
       return view('locatarios/.cadastrar');
});
Route::get('locatarios/listar', function () {
       return view('locatarios/.listar');
});
Route::get('locatarios/ver/{id}', function () {
       return view('locatarios.ver');
});
Route::get('locatarios/editar/{id}', function () {
       return view('locatarios.editar');
});

//Rotas dos fiadores
Route::get('fiadores/cadastrar', function () {
       return view('fiadores/.cadastrar');
});
Route::get('fiadores/listar', function () {
       return view('fiadores/.listar');
});
Route::get('fiadores/ver/{id}', function () {
       return view('fiadores.ver');
});
Route::get('fiadores/editar/{id}', function () {
       return view('fiadores.editar');
});
//Rotas dos fornecedores
Route::get('fornecedores/cadastrar', function () {
       return view('fornecedores/.cadastrar');
});
Route::get('fornecedores/listar', function () {
       return view('fornecedores/.listar');
});
Route::get('fornecedores/ver/{id}', function () {
       return view('fornecedores.ver');
});
Route::get('fornecedores/editar/{id}', function () {
       return view('fornecedores.editar');
});
//Rotas dos procuradores
Route::get('procuradores/cadastrar', function () {
       return view('procuradores/.cadastrar');
});
Route::get('procuradores/listar', function () {
       return view('procuradores/.listar');
});
Route::get('procuradores/ver/{id}', function () {
       return view('procuradores.ver');
});
Route::get('procuradores/editar/{id}', function () {
       return view('procuradores.editar');
});
//Rotas dos favorecidos
Route::get('favorecidos/cadastrar', function () {
       return view('favorecidos/.cadastrar');
});
Route::get('favorecidos/listar', function () {
       return view('favorecidos/.listar');
});
Route::get('favorecidos/ver/{id}', function () {
       return view('favorecidos.ver');
});
Route::get('favorecidos/editar/{id}', function () {
       return view('favorecidos.editar');
});

//Login
Route::get('usuarios/login', function () {
       return view('login.login');
});

Route::get('usuarios/cadastrar', function () {
       return view('login.cadastrar');
});

//Rotas dos favorecidos
Route::get('contas/cadastrar', function () {
       return view('contas/.cadastrar');
});
Route::get('contas/listar', function () {
       return view('contas/.listar');
});
Route::get('contas/ver/{id}', function () {
       return view('contas.ver');
});
Route::get('contas/editar/{id}', function () {
       return view('contas.editar');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
