<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\HomeController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', HomeController::class, '__invoke')->name('index');
Route::resource('klasifikasi', KlasifikasiController::class);

/* Route::get('klasifikasi', KlasifikasiController::class, '__invoke')->name('klasifikasi.index');
Route::get('klasifikasi-create', KlasifikasiController::class, 'create')->name('klasifikasi.create');
Route::post('klasifikasi-post', KlasifikasiController::class, 'store')->name('klasifikasi.store');
Route::get('klasifikasi-edit/{id}', KlasifikasiController::class, 'edit')->name('klasifikasi.edit');
Route::post('klasifikasi-update', KlasifikasiController::class, 'update_action')->name('klasifikasi.update');
Route::post('klasifikasi-destroy/{id}', KlasifikasiController::class, 'destroy')->name('klasifikasi.destroy'); */