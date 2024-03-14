<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListProdukController;
use App\Http\Controller\Praktikum5Controller;
use App\Http\Controller\prak5Controller;

// Route::get('/', function () {
//  return view('welcome');
// });


Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('user/{id}', function ($id) {
    return 'User dengan ID' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/list-produk', [ListProdukController::class, 'tampilkan']);

Route::get('/praktikum5,', [Praktikum5Controller::class, 'tampilkan']);

Route::get('/prak5,', [prak5Controller::class, 'tampilkan']);
