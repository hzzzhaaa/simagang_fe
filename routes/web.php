<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::post('logout', [App\Http\Controllers\AuthController::class,'logout'])->name('logout');
Route::post('login', [App\Http\Controllers\AuthController::class,'login'])->name('login');


Route::group(['middleware' => 'hastoken'],function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/paket', [App\Http\Controllers\PacketController::class, 'index'])->name('paket');
    Route::get('/pilihpaket', [App\Http\Controllers\PacketController::class, 'pilihPaket'])->name('pilihpaket');
    Route::get('/tambahpaket', [App\Http\Controllers\PacketController::class, 'create'])->name('tambahpaket');
    Route::get('/semester', [App\Http\Controllers\SemesterController::class, 'index'])->name('semester');
    Route::get('/pemetaan', [App\Http\Controllers\PemetaanPaketController::class, 'index'])->name('pemetaan');
    Route::get('/program', [App\Http\Controllers\ProgramController::class, 'index'])->name('program');
    Route::get('/informasi', [App\Http\Controllers\InformasiController::class, 'index'])->name('informasi');
    Route::get('/tambahmk/{id}', [App\Http\Controllers\PacketController::class,'tambahmatakuliah'])->name('tambahmatkul');
});
