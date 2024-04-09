<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin/admin-dashboard');
// });

Route::get('/', [App\Http\Controllers\adminDashboardController::class, 'index']);
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// pengelolaan tisu
Route::get('/pemasukan-tisu', [App\Http\Controllers\adminDashboardController::class, 'pemasukanTisu']);

// pengelolaan handsoap

// pendataan kerusakan



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
