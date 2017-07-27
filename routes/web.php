<?php

Route::get('/', function () {
    return view('welcome');
});

route::get('/about',function () {
	return '<h1>haloo</h1>'
	.'Selamat Datang di Web saya <br>'
	.'laravel . emang keren. ';
});

Route::get('/latihan', function () {
    return view('adams');
});

Route::get('/1', function () {
    return view('about.one');
});

Route::get('/2', function () {
    return view('about.dua');
});

Route::get('/3', function () {
    return view('about.tiga');
});

Route::get('user/{name}',function ($name){
	$a="john";
	return 'nama : '.$a;
});