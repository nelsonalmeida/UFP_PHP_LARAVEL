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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/home','HomeController@search_user');

//ROTAS PARA ATUALIZAR DATAS E HORAS A APRESENTAR AOS CLIENTES
Route::post('/home/date/update/monday', 'HomeController@update_date_monday');
Route::post('/home/date/update/tuesday', 'HomeController@update_date_tuesday');
Route::post('/home/date/update/wednesday', 'HomeController@update_date_wednesday');
Route::post('/home/date/update/thursday', 'HomeController@update_date_thursday');
Route::post('/home/date/update/friday', 'HomeController@update_date_friday');
Route::post('/home/date/update/saturday', 'HomeController@update_date_saturday');
Route::post('/home/date/update/sunday', 'HomeController@update_date_sunday');

//ROTA PARA PESQUISAR UM USER NA BASE DE DADOS
Route::post('/home/person/update', 'HomeController@search_user');

//ROTA PARA APAGAR UM USER DA BASE DE DADOS
Route::post('/home/person/delete', 'HomeController@delete_user');
