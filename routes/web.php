<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplierController;
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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::resource('/shop', BarangController::class);
Route::get('single/{barang:slug}', [BarangController::class, 'show'])->name('show');
Route::get('/contact', function () {
    return view('contact');
});

Route::resource('/customer', PelangganController::class);
Route::resource('/supplier', SupplierController::class);
Route::resource('/pegawai', PegawaiController::class);
