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
}
