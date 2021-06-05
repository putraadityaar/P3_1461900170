<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\putraController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dokter', [putraController::class, 'dokter']);
Route::get('/kamar', [putraController::class, 'kamar']);
Route::get('/pasien', [putraController::class, 'pasien']);
Route::get('/pasien/tambah', [putraController::class,'tambah']);
Route::get('/pasien/hapus/{id}', [putraController::class,'hapus']);
Route::get('/pasien/edit/{id}',[putraController::class,'edit']);