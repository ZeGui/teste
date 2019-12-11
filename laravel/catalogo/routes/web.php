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
    return view('front');
});

Route::get('/login', [ 'as' => 'login', 'uses' => 'AuthController@login']);
// Route::post('/authenticate','AuthController@authenticate');

    Route::get('/register', function () {
    return view('auth.register');
    });
    Route::post('/register','AuthController@storeUser');

// Route::group(['middleware'=>'auth'],function(){
    Route::get('/disciplinas', 'DisciplinaController@index');
    Route::get('/produtos/remover/{id}', 'QuestoesController@remover');
    Route::get('/questoes', 'QuestoesController@index');
    Route::get('/alternativas', 'AlternativaController@index');
    Route::get('/questoes/adicionar', function () {
        return view('questoes.adicionar');
    });
    Route::get('/disciplinas/adicionar', function () {
        return view('disciplinas.adicionar');
    });

//  });

    Route::post('/questoes', 'QuestoesController@gravar');
    Route::post('/disciplinas', 'DisciplinaController@gravar');
    Route::post('/alternativas', 'AlternativaController@gravar');
