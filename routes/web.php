<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\suratController;

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

Route::get('/list-surat', [suratController::class, 'list']);

Route::get('/tambah-surat', function () {
    return view('tambah-surat');
});
Route::post('/simpan-surat', [suratController::class, 'simpan']);
Route::get('/hapus-surat/{id}', [suratController::class, 'hapus']);
Route::get('/ubah-surat/{id}', [suratController::class, 'ubah']);
Route::post('/ubah-surat', [suratController::class, 'rubah']);
