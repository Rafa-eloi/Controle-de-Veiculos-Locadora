<?php

use Illuminate\Support\Facades\Route;

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

//Rotas para os Veiculos
Route::get('/admin/veiculos' ,['as'=>'admin.veiculos','uses'=>'Admin\VeiculoController@index']);
Route::get('/admin/veiculos/adicionar' ,['as'=>'admin.veiculos.adicionar','uses'=>'Admin\VeiculoController@adicionar']);
Route::post('/admin/veiculos/salvar' ,['as'=>'admin.veiculos.salvar','uses'=>'Admin\VeiculoController@salvar']);
Route::get('/admin/veiculos/editar/{id}' ,['as'=>'admin.veiculos.editar','uses'=>'Admin\VeiculoController@editar']);
Route::put('/admin/veiculos/atualizar/{id}' ,['as'=>'admin.veiculos.atualizar','uses'=>'Admin\VeiculoController@atualizar']);
Route::get('/admin/veiculos/deletar/{id}' ,['as'=>'admin.veiculos.deletar','uses'=>'Admin\VeiculoController@deletar']);


//Rotas para os Clientes
Route::get('/admin/clientes' ,['as'=>'admin.clientes','uses'=>'Admin\ClienteController@index']);
Route::get('/admin/clientes/adicionar' ,['as'=>'admin.clientes.adicionar','uses'=>'Admin\ClienteController@adicionar']);
Route::post('/admin/clientes/salvar' ,['as'=>'admin.clientes.salvar','uses'=>'Admin\ClienteController@salvar']);
Route::get('/admin/clientes/editar/{id}' ,['as'=>'admin.clientes.editar','uses'=>'Admin\ClienteController@editar']);
Route::put('/admin/clientes/atualizar/{id}' ,['as'=>'admin.clientes.atualizar','uses'=>'Admin\ClienteController@atualizar']);
Route::get('/admin/clientes/deletar/{id}' ,['as'=>'admin.clientes.deletar','uses'=>'Admin\ClienteController@deletar']);


//Rotas para o Aluguel
Route::get('/admin/aluguel' ,['as'=>'admin.aluguel','uses'=>'Admin\AluguelController@index']);
Route::get('/admin/aluguel/adicionar' ,['as'=>'admin.aluguel.adicionar','uses'=>'Admin\AluguelController@adicionar']);
Route::post('/admin/aluguel/salvar' ,['as'=>'admin.aluguel.salvar','uses'=>'Admin\AluguelController@salvar']);
Route::get('/admin/aluguel/editar/{id}' ,['as'=>'admin.aluguel.editar','uses'=>'Admin\AluguelController@editar']);
Route::put('/admin/aluguel/atualizar/{id}' ,['as'=>'admin.aluguel.atualizar','uses'=>'Admin\AluguelController@atualizar']);
Route::get('/admin/aluguel/deletar/{id}' ,['as'=>'admin.aluguel.deletar','uses'=>'Admin\AluguelController@deletar']);

