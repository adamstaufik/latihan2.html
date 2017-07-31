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

Route::get('/testmodel',function(){
	$a=App\post::all();
 	return $a;

 	});

Route::get('/testmodel1',function(){
	$g=App\post::find(1);
 	return $g;
 });

Route::get('/testmodel2',function(){
	$d=App\post::find(2);
	$d->title = "ciri keluarga sakinah";
	$d->save();
 	return $d;
 });

Route::get('/testmodel3',function(){
	$c=App\post::where('title','like','%Tips Cepat Nikah%')->get();
 	return $c;
 });




Route::get('/testmodel5',function(){
	$c = App\post;
	$c->Title = "7 malam pembuka jodoh";
	$c->Title = "sholat malam,sedekah,puasa sunnah,senyum,doa,taubat";
	$c->save();
	return $c;
});

route::get('/about',function () {
	return view ('adams');

});

route::get('/cek',function () {
	return view ('layouts.wellcome');

});

route::get('/nav',function () {
	return view ('layouts.nav');

});

// Route::get('/ortu',function(){
// $ortu = App\orangtua::all();
// foreach ($ortu as $key) {
// 	echo $key->nama_ayah;
// 	echo " dengan " ;
//     echo $key->nama_ibu;
//     echo "Mempunyai anak";
//     foreach ($key->siswa as $data) {
//     	echo "<li>$data->nama</li>";
//     	echo "<hr>";
//     }
// }

//  });

Route::get('/percobaan', 'sekolah@index');
Route::get('/tampil', 'sekolah@tampilmodel');
Route::get('/tampilan2', 'sekolah@tampilan2');
Route::get('/ortu', 'sekolah@bagai');
Route::resource('orangtua','OrangtuaController');
Route::resource('siswa','siswaController');