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
Route::get('/createSekolah', [SekolahController::class, 'create']);
Route::post('/storeSekolah', [SekolahController::class, 'store']);
Route::get('/getSekolah/{id}', [SekolahController::class, 'showSekolah']);
Route::get('/editSekolah/{id}', [SekolahController::class, 'edit']);
Route::put('/updateSekolah/{id}', [SekolahController::class, 'update']);
Route::delete('/deleteSekolah/{id}', [SekolahController::class, 'delete']);
Route::get('/indexSiswa', [SiswaController::class, 'index']);
Route::get('/createSiswa', [SiswaController::class, 'create']);
Route::post('/storeSiswa', [SiswaController::class, 'store']);
Route::get('/getSiswa/{id}', [SiswaController::class, 'getData']);
Route::get('/editSiswa/{id}', [SiswaController::class, 'edit']);
Route::put('/updateSiswa/{id}', [SiswaController::class, 'update']);
Route::delete('/deleteSiswa/{id}', [SiswaController::class, 'delete']);








