<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\siswa;
class sekolah extends Controller
{
    //
     public function index()
    {
    	$a = "adams";
       	return $a;
}

 public function tampilmodel()
    {
    	$ortu = orangtua::all();
       	return $a;
}

 public function tampilan2()
 {
 	return view('adams');
 }

public function bagai()
    {
    	$ortu = orangtua::all();
    	return view('layouts.siswa', compact('ortu'));
    }
}
