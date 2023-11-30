<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

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

// Route :: get('/fakultas', function () {
//     return view('fakultas');
// });

Route::middleware('auth')->group(function(){
    Route::resource('fakultas',FakultasController::class);
    Route::resource('prodi',ProdiController::class);
    Route::resource('mahasiswa',MahasiswaController::class);
});

// Route::resource('fakultas',
// FakultasController::class);

// Route :: get('/prodi', function () {
//     return view('prodi');
// });

// Route :: get('/mahasiswa', function () {
//     $data  = [
//         ["npm" => 2226250067, "nama" => "Dzakwan"],
//         ["npm" => 2226250094, "nama" => "Devita"]
//     ];
//         return view ('mahasiswa.index')->with('mahasiswa', $data);
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
