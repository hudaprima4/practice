<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKontak;

class Kontak extends Controller
{
    public function index()
    {
        $data = ModelKontak::all();
        return view('kontak',compact('data'));
    }

    public function create(){
        return view('kontak_create');
    }

    public function store(Request $request){
        $data = new ModelKontak();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('kontak.index')->with('alert-success','Berhasil menambahkan Data!');
    }

    public function edit($id){
        $data = ModelKontak::where('id',$id)->get();
        return view('kontak_edit',compact('data'));
    }

    public function update(Request $request, $id){
        $data = ModelKontak::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasil diubah');
    }

    public function destroy($id){
        $data = ModelKontak::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasil dihapus');
    }
}
