<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // cara mengabil model

class SiswaController extends Controller
{
    public function index(){

        $namasiswa=Siswa::all();
    

        return view('siswa.index',compact('namasiswa'));
    }
}
