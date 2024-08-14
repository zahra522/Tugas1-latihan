<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SiswaController; 




Route::get('/', function () {
    return view ('welcome');
});

Route::get('/about', function () {
    return view ('about');
});

Route::get('/blog', function () {
    return view ('post'); 
});

 
Route::get('/testdata', [HomeController::class, 'home']);
Route::get('/getdatahome', [HomeController::class, 'getdata']);
Route::get('/denial', [HomeController::class, 'denial']);
Route::get('/indexSekolah', [SekolahController::class, 'index']);
Route::get('/indexSiswa', [SiswaController::class, 'index']);
Route::get('/createSiswa', [SiswaController::class, 'create']);
Route::post('/storeSiswa', [SiswaController::class, 'store']);





