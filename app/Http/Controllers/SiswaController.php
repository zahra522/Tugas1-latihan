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

    public function create(){

        
        return view('siswa.create');

    }

    public function store(Request $request){

        $data=$request->all();
        // Remove the _token field from the array
        unset($data['_token']);
        $dataproses=Siswa::insert($data);
        $namasiswa=Siswa::all();
    
        return view('siswa.index',compact('namasiswa'));
    }

}
