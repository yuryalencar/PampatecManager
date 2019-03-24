<?php
Route::group(['prefix' => 'evaluator', 'as' => 'evaluator.', 'where' => ['id' => '[0-9]+']], function () {
    Route::group(['middleware' => 'authorization:evaluator'], function () {

        //TODO: remove later
        Route::get('/', ['as' => 'home', 'uses' => 'TestController@index']);
    });
});