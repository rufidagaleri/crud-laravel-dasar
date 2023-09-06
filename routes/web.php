<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(BarangController::class)->group(function () {
    Route::get('/barang', 'index');
    Route::post('/barang', 'store');
    Route::get('/barang/ubah/{id}', 'edit');
    Route::post('/barang/ubah/{id}', 'update');
    Route::get('/barang/hapus/{id}', 'destroy');
});
