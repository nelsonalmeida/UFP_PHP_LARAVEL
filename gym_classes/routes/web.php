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
    $locale = App::getLocale();
    return redirect('welcome/'.$locale);
});

//login com Facebook
Route::get('auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');


Route::get('/welcome/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/home/{locale}', 'HomeController@index_lang');

//ROTAS PARA ATUALIZAR DATAS E HORAS A APRESENTAR AOS CLIENTES
Route::put('/home/en/update_monday', 'HomeController@update_date_monday');
Route::put('/home/en/update_tuesday', 'HomeController@update_date_tuesday');
Route::put('/home/en/update_wednesday', 'HomeController@update_date_wednesday');
Route::put('/home/en/update_thursday', 'HomeController@update_date_thursday');
Route::put('/home/en/update_friday', 'HomeController@update_date_friday');
Route::put('/home/en/update_saturday', 'HomeController@update_date_saturday');
Route::put('/home/en/update_sunday', 'HomeController@update_date_sunday');

//ROTA PARA PESQUISAR UM USER NA BASE DE DADOS
//Route::get('/home/person_search/{id_person_search}', 'HomeController@search_user_get');
Route::post('/home/en/person_search', 'HomeController@search_user');
//Route::get('/home/person_search/{id}', 'HomeController@search_user_get')->where('id');

//ROTA PARA LISTAR TODOS OS USERS
Route::get('/home/pt/list_persons', 'HomeController@list_users');

//ROTA PARA EDITAR UM USER NA BASE DE DADOS
Route::put('/home/en/person_edite', 'HomeController@update_user');

//ROTA PARA APAGAR UM USER DA BASE DE DADOS
Route::delete('/home/en/person_delete', 'HomeController@delete_user');

//ROTA PARA CRIAR MARCAÇÃO NA BASE DE DADOS
Route::post('/home/en/create_booking', 'HomeController@create_booking');


//NOTAS:
//CREATE -> post
//READ -> get
//UPDATE -> put
//DELETE -> delete
