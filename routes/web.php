<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MahasiswaaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdiiController;



Route::get('/show/{id}', function ($id) {
    echo "Nilai GET parameter id=" . $id;
});

Route::get('/show/{id?}', function($id=1){
    echo "Nilai GET parameter id=".$id;
});

Route::get('/edit/{nama}', function ($nama) {
    echo "Nilai GET parameter nama=" . $nama;
})->where('nama', '[A-Za-z]+');

Route::get('/start', function () {
    echo "<a href='" . route('coba') . "'>Start</a>";
})->name('start');

Route::get('/coba', function () {
    echo "<a href='" . route('start') . "'>Kembali</a>";
})->name('coba');


Route::get('/welcome', function () {
    echo "Selamat Datang";
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi');
Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');
Route::get('/mhs/show', [mhsController::class, 'show']) ->name('mhs-show');
Route::get('/mhs/perulangan', [mhsController::class, 'perulangan'])->name('mhs-perulangan');

Route::get('/', function () {
    $title = "FAJRIAG.com";
    $slug  = "home";
    $konten = "WELCOME TO MY WEBSITE";
    return view('konten.home', compact('title','slug','konten'));
});

Route::get('/home', function () {
    $title = "Websaya.com";
    $slug  = "home";
    $konten = "Ini adalah konten websaya.com";
    return view('konten.home', compact('title','slug','konten'));
});


// routes/web.php
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/prodi', function () {
    return view('prodi');
});

Route::get('/mahasiswaa', [mahasiswaaController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/prodii', [ProdiiController::class, 'index']);

