<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // cara mengabil model

class SiswaController extends Controller
{
    public function index(){

        $namasiswa=Siswa::all(); //get/all  memanggil semua data
    

        return view('siswa.index',compact('namasiswa'));
    }

    public function create(){

    
        return view('siswa.create');
    }

    public function store(Request $request){

        $data=$request->all();
        // Remove the _token field from the array
        unset($data['_token']);
        $dataproses=Siswa::insert($data); //insert data
        $namasiswa=Siswa::all();
    
        return view('siswa.index',compact('namasiswa'));
    }

    public function getData($id){

        $findsiswa=Siswa::where('id',$id)->first(); //first/find memangil 1 data
        
        if($findsiswa == null){  //pengecekan data

            return "Data Tidak Ada";
        }

        return view('siswa.show',compact('findsiswa'));
    }

    public function edit($id){

        $findsiswa=Siswa::where('id',$id)->first(); //first/find memangil 1 data
        
        if($findsiswa == null){  //pengecekan data

            return "Data Tidak Ada";
        }

        return view('siswa.edit',compact('findsiswa'));
    }

    public function update(Request $request, $id){

        $data=$request->all();
        // Remove the _token field from the array
        unset($data['_token']);
        unset($data['_method']);


        $dataproses=Siswa::where('id',$id)->update($data); //insert data
        $namasiswa=Siswa::all();

        return view('siswa.index',compact('namasiswa'));
    } 

    public function delete($id){


        $siswa = Siswa::findOrFail($id);

        if($siswa == null){  //pengecekan data

            return "Data Tidak Ada";
        }

        // Delete the siswa record
        $siswa->delete();
        $namasiswa=Siswa::all();

        return view('siswa.index',compact('namasiswa'));

    }
}
