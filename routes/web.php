<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return "Hallo Laravel!";
});

Route::get('/halo', function(){
    return 'Halo, selamat datang di Laravel 13!';
});

Route::get('/waktu', fn () => now()->format('d-m-Y H:i:s'));

Route::get('/profil/{nama}', function (string $nama){
    return "Halo, {$nama}!";
});


Route::get('/kategori/{nama}', function (?string $nama = 'semua'){
    return "Menampilkan kategori: {$nama}";
});

Route::get('/kelas/{kode}/mahasiswa/{nim}', function (string $kode, string $nim){
    return "Kelas {$kode}, NIM{$nim}";
});

