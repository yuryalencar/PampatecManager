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

$this->group(['middleware' => ['auth'], 'prefix' => 'plano'], function(){
    $this->get('novoplano', 'BusinessPlanController@novoplano')->name('novo.plano');
    $this->post('novoplano', 'BusinessPlanController@salvar')->name('salvar.plano');
    $this->get('planosexistentes', 'BusinessPlanController@planosexistentes')->name('listar.plano');
    $this->get('editarplano', 'BusinessPlanController@editarplano')->name('editar.plano');
    $this->post('editarplano', 'BusinessPlanController@update')->name('update.plano');
    $this->get('destroy', 'BusinessPlanController@destroy')->name('destroy.plano');
});

$this->group(['middleware' => ['auth'], 'prefix' => 'ajuda'], function(){
    $this->get('editarajuda/{id}', 'HelpController@abrirForm')->name('editar.ajuda');
    $this->post('salvarajuda', 'HelpController@update')->name('salvar.ajuda');
    $this->get('listarajuda', 'HelpController@listar')->name('listar.ajuda');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'avaliacao', 'as' => 'evaluate.'], function () {

    Route::group(['middleware' => ['auth'], 'prefix' => 'criterios', 'as' => 'criteria.'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'EvaluateCriteriaController@index']);
        Route::get('/excluidos', ['as' => 'deleted', 'uses' => 'EvaluateCriteriaController@deleted']);
        Route::get('/novo', ['as' => 'create', 'uses' => 'EvaluateCriteriaController@create']);
        Route::post('/', ['as' => 'store', 'uses' => 'EvaluateCriteriaController@store']);
        Route::post('/atualizar', ['as' => 'update', 'uses' => 'EvaluateCriteriaController@update']);
        Route::get('/editar/{id}', ['as' => 'edit', 'uses' => 'EvaluateCriteriaController@edit']);
        Route::get('/{id}/remover', ['as' => 'remove', 'uses' => 'EvaluateCriteriaController@destroy']);
        Route::get('/{id}/restaurar', ['as' => 'restore', 'uses' => 'EvaluateCriteriaController@restore']);
        Route::delete('/{id}', ['as' => 'delete', 'uses' => 'EvaluateCriteriaController@destroy']);
    });

});

Route::group(['middleware' => ['auth'], 'prefix' => 'controle', 'as' => 'control.'], function () {

    Route::group(['middleware' => ['auth'], 'prefix' => 'acesso', 'as' => 'access.'], function () {

        Route::group(['middleware' => ['auth'], 'prefix' => 'empresas', 'as' => 'company.'], function () {
            Route::get('/', ['as' => 'index', 'uses' => 'AccessControl\BusinessPartnersController@indexCompany']);
            Route::get('/excluidos', ['as' => 'deleted', 'uses' => 'EvaluateCriteriaController@deleted']); // @TODO
            Route::get('/novo', ['as' => 'create', 'uses' => 'AccessControl\BusinessPartnersController@createCompany']);
            Route::post('/', ['as' => 'store', 'uses' => 'AccessControl\BusinessPartnersController@storeCompany']);
            Route::post('/atualizar', ['as' => 'update', 'uses' => 'AccessControl\BusinessPartnersController@updateCompany']);
            Route::get('/editar/{id}', ['as' => 'edit', 'uses' => 'AccessControl\BusinessPartnersController@editCompany']);
            Route::get('/{id}/remover', ['as' => 'remove', 'uses' => 'AccessControl\BusinessPartnersController@destroyPartnerById']);
            Route::get('/{id}/restaurar', ['as' => 'restore', 'uses' => 'EvaluateCriteriaController@restore']); // @TODO
            Route::delete('/{id}', ['as' => 'delete', 'uses' => 'AccessControl\BusinessPartnersController@destroyPartnerById']);
        });

        Route::group(['middleware' => ['auth'], 'prefix' => 'grupos', 'as' => 'research.'], function () {
            Route::get('/', ['as' => 'index', 'uses' => 'AccessControl\BusinessPartnersController@indexResearchGroup']);
            Route::get('/excluidos', ['as' => 'deleted', 'uses' => 'EvaluateCriteriaController@deleted']); // @TODO
            Route::get('/novo', ['as' => 'create', 'uses' => 'AccessControl\BusinessPartnersController@createResearchGroup']);
            Route::post('/', ['as' => 'store', 'uses' => 'AccessControl\BusinessPartnersController@storeResearchGroup']);
            Route::post('/atualizar', ['as' => 'update', 'uses' => 'AccessControl\BusinessPartnersController@updateResearchGroup']);
            Route::get('/editar/{id}', ['as' => 'edit', 'uses' => 'AccessControl\BusinessPartnersController@editResearchGroup']);
            Route::get('/{id}/remover', ['as' => 'remove', 'uses' => 'AccessControl\BusinessPartnersController@destroyPartnerById']);
            Route::get('/{id}/restaurar', ['as' => 'restore', 'uses' => 'EvaluateCriteriaController@restore']); // @TODO
            Route::delete('/{id}', ['as' => 'delete', 'uses' => 'AccessControl\BusinessPartnersController@destroyPartnerById']);
        });

    });

});

Route::group(['middleware' => ['auth'], 'prefix' => 'ajuda', 'as' => 'help.'], function () {

    Route::group(['middleware' => ['auth'], 'prefix' => 'criterios', 'as' => 'plan.'], function () {

    });

});

