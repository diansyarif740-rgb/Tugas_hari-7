<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\katalogcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sapa', function () {
    return 'Halo, kelompok 6!';
});

Route::get('/katalog',
[katalogcontroller::class, 'index']
)->name('katalog.index');

Route::get('/katalog/{id}',
    [KatalogController::class, 'show']
)->whereNumber('id')
 ->name('katalog.show');