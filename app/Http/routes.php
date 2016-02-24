<?php

Route::get('/','PagesController@index'); 

Route::group(['middleware' => ['web']], function () {
    //
});

Route::get('/foobar','PagesController@foobar'); 
