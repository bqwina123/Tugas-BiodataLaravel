<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/biodata', function () {
    $data = [
        'nama' => 'Budi Santoso',
        'umur' => 21,
        'alamat' => 'Jl. Melati No. 45, Jakarta',
        'email' => 'budi.santoso@email.com',
        'telepon' => '0812-3456-7890',
    ];
    return view('biodata', $data);
});
