<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah; // cara mengabil model

class SekolahController extends Controller
{
    public function index(){

        $namasekolah=Sekolah::all();
        // dd($dataSekolah);

        return view('sekolah.index',compact('namasekolah'));
    }

    public function create(){

    
        return view('sekolah.create');
     
    }    
    public function store(Request $request){

        $data=$request->all();
        // Remove the _token field from the array
        unset($data['_token']);
        $dataproses=Sekolah::insert($data); //insert data
        $namasekolah=Sekolah::all();
    
        return view('sekolah.index',compact('namasekolah'));
    }
    public function showSekolah($id){

        $findsekolah=Sekolah::where('id',$id)->first(); //first/find memangil 1 data
        
        if($findsekolah == null){  //pengecekan data

            return "Data Tidak Ada";
        }

        return view('sekolah.show',compact('findsekolah'));
    }
    public function edit($id){

        $findsekolah=Sekolah::where('id',$id)->first(); //first/find memangil 1 data
        
        if($findsekolah == null){  //pengecekan data

            return "Data Tidak Ada";
        }
        return view('sekolah.edit',compact('findsekolah'));

    } 
    public function update(Request $request, $id){

        $data=$request->all();
        // Remove the _token field from the array
        unset($data['_token']);
        unset($data['_method']);


        $dataproses=Sekolah::where('id',$id)->update($data); //insert data
        $namasekolah=Sekolah::all();

        return view('sekolah.index',compact('namasekolah'));
    } 
    public function delete($id){


        $sekolah = Sekolah::findOrFail($id);

        if($sekolah == null){  //pengecekan data

            return "Data Tidak Ada";
        }

        // Delete the sekolah record
        $sekolah->delete();
        $namasekolah=Sekolah::all();

        return view('sekolah.index',compact('namasekolah'));

    }
}