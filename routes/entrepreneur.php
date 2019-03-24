<?php
Route::group(['prefix' => 'entrepreneur', 'as' => 'entrepreneur.', 'where' => ['id' => '[0-9]+']], function () {
    Route::group(['middleware' => 'authorization:entrepreneur'], function () {

        //TODO: remove later
        Route::get('/', ['as' => 'home', 'uses' => 'TestController@index']);
    });
});