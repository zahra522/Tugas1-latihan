<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah; // cara mengabil model

class SekolahController extends Controller
{
    public function index(){

        $dataSekolah=Sekolah::all();
        // dd($dataSekolah);

        return view('sekolah.index',compact('dataSekolah'));
    }
}
