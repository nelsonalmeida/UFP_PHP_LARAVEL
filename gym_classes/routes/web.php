<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;

Auth::routes();

Route::get('/', function() {
    return redirect('/en');
});

Route::get('/en', function() {
    return view('welcome');
});

Route::get('/pt', function() {
    return view('welcome');
});

Route::get('/{locale}/home', 'HomeController@index');

//Route::post('/home','HomeController@search_user');

//ROTAS PARA ATUALIZAR DATAS E HORAS A APRESENTAR AOS CLIENTES
Route::put('/home/update_monday', 'HomeController@update_date_monday');
Route::put('/home/update_tuesday', 'HomeController@update_date_tuesday');
Route::put('/home/update_wednesday', 'HomeController@update_date_wednesday');
Route::put('/home/update_thursday', 'HomeController@update_date_thursday');
Route::put('/home/update_friday', 'HomeController@update_date_friday');
Route::put('/home/update_saturday', 'HomeController@update_date_saturday');
Route::put('/home/update_sunday', 'HomeController@update_date_sunday');

//ROTA PARA PESQUISAR UM USER NA BASE DE DADOS
//Route::get('/home/person_search/{id_person_search}', 'HomeController@search_user_get');
Route::post('/home/person_search', 'HomeController@search_user');
//Route::get('/home/person_search/{id}', 'HomeController@search_user_get')->where('id');

//ROTA PARA LISTAR TODOS OS USERS
Route::get('/home/list_persons', 'HomeController@list_users');


//ROTA PARA EDITAR UM USER NA BASE DE DADOS
Route::put('/home/person_edite', 'HomeController@update_user');

//ROTA PARA APAGAR UM USER DA BASE DE DADOS
Route::delete('/home/person/delete', 'HomeController@delete_user');



//ROTA PARA CRIAR MARCAÇÃO NA BASE DE DADOS
Route::post('/home/create_booking', 'HomeController@create_booking');


//NOTAS:
//CREATE -> post
//READ -> get
//UPDATE -> put
//DELETE -> delete
