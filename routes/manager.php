<?php
Route::group(['prefix' => 'manager', 'as' => 'manager.', 'where' => ['id' => '[0-9]+']], function () {
    Route::group(['middleware' => 'authorization:manager'], function () {

    //TODO: remove later
        Route::get('/', ['as' => 'index', 'uses' => 'TestController@index']);
    });
});