<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\controllereco;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class, 'index']);

Route::middleware(['isTamu'])->group(function () {
    Route::get('sesi', [SessionController::class, 'index']);
    Route::post('sesi/login', [SessionController::class, 'login']);
    Route::get('sesi/register', [SessionController::class, 'register']);
    Route::post('sesi/create', [SessionController::class, 'create']);
});

Route::middleware(['islogin'])->group(function () {
    Route::get('sesi/logout', [SessionController::class, 'logout']);
    Route::get('welcome', function(){
        return view('sesi.welcome');
    });
});

Route::middleware(['islogin', 'isAdmin'])->group(function () {
    Route::resource('ecommers', controllereco::class);
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
    Route::delete('/users/{id}', [RoleController::class, 'delete'])->name('user.delete');
    Route::get('/detail_pemesanan/{id}', 'DetailPemesananController@show')->name('detail_pemesanan.show');
});




