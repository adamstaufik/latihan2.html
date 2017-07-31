<?php

Route::get('/', function () {
    return view('welcome');
});

route::get('/about',function () {
	return '<h1>haloo</h1>'
	.'Selamat Datang di Web saya <br>'
	.'laravel . emang keren. ';
});

