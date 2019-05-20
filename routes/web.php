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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

$this->group(['middleware' => ['auth'], 'prefix' => 'plano'], function () {
    $this->get('novoplano', 'PlanoNegocioController@novoplano')->name('novo.plano');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'avaliacao', 'as' => 'evaluate.'], function () {

    Route::group(['middleware' => ['auth'], 'prefix' => 'criterios', 'as' => 'criteria.'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'EvaluateCriteriaController@index']);
        Route::get('/novo', ['as' => 'create', 'uses' => 'EvaluateCriteriaController@create']);
        Route::post('/', ['as' => 'store', 'uses' => 'EvaluateCriteriaController@store']);
        Route::post('/atualizar', ['as' => 'update', 'uses' => 'EvaluateCriteriaController@update']);
        Route::get('/editar/{id}', ['as' => 'edit', 'uses' => 'EvaluateCriteriaController@edit']);
        Route::get('/{id}/remover', ['as' => 'remove', 'uses' => 'EvaluateCriteriaController@destroy']);
        Route::get('/{id}/restaurar', ['as' => 'restore', 'uses' => 'EvaluateCriteriaController@restore']);
        Route::delete('/{id}', ['as' => 'delete', 'EvaluateCriteriaController@destroy']);
    });

});

