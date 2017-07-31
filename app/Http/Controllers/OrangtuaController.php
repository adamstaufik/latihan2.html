<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orangtua = orangtua::with('siswa')->get();
        return view('orangtua.index',compact('orangtua'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('orangtua.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $orangtua = new orangtua;
         $orangtua->nama_ayah = $request->a;
         $orangtua->nama_ibu = $request->b;
         $orangtua->umur_ayah = $request->c;
         $orangtua->umur_ibu = $request->d;
         $orangtua->alamat = $request->e;
         $orangtua->save();
         return redirect('orangtua');

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $orangtua = orangtua::findOrFail($id);
        return view('orangtua.edit',compact('orangtua'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $orangtua = orangtua::findOrfail($id);
         $orangtua->nama_ayah = $request->a;
         $orangtua->nama_ibu = $request->b;
         $orangtua->umur_ayah = $request->c;
         $orangtua->umur_ibu = $request->d;
         $orangtua->alamat = $request->e;
         $orangtua->save();
         return redirect('orangtua');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $orangtua = orangtua::findOrfail($id);
        $orangtua::detele();
        return redirect('orangtua');
    }
}
