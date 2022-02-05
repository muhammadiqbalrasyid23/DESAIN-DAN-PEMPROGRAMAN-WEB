<?php

use App\Http\Controllers\Admin\TentangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatapenumpangController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/', [IndexController::class, 'pesan'])->name('pesan');

Route::prefix('admin')->group(function () {
    //    prefix adalah link awal
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('tentang', [TentangController::class, 'index'])->name('tentang');
    Route::post('tentang', [TentangController::class, 'update'])->name('update.tentang');
    Route::get('datapenumpang', [DatapenumpangController::class, 'index'])->name('datapenumpang');
    Route::get('datapenumpang/{id}', [DatapenumpangController::class, 'hapus'])->name('hapus.datapenumpang');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
