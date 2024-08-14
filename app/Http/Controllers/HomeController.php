<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $variableString="Variable String"; // sigle data
        $variableInteger=32000; // sigle data
        //array adalah suatu variable yang memiliki banyak nilai atau value
        //aray mengitung dari 0
        $namaMakananFavorit= ['Nasi goreng','Ayama Goreng','Rendang'];


        //compact untuk menampilakan data ke view
        return view('pertemuan2',compact('variableInteger','variableString','namaMakananFavorit'));
    }

    public function getdata(){

        return view('getdata');

    }
    public function denial(){

        return view('denial');

    }
}
