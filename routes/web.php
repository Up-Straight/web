<?php

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'Dashboard\HomeController@index');

Route::group(['namespace' => 'Auth'], function () {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/login', 'LoginController@showLoginForm');
        Route::post('/login/check', 'LoginController@login');
        Route::get('/register', 'RegisterController@showRegister');
        Route::post('/register/check', 'RegisterController@register');
    });

    Route::get('/logout', 'LoginController@customerLogout');
});

Route::group(['namespace' => 'Dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index');
});
