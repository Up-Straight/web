<?php

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/dashboard', 'Dashboard\HomeController@index');