<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator;
use App\Http\Controllers\Admin_login;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


//Login Administrator
Route::get('/', [Admin_login::class, 'form_login']);
Route::get('/admin-login', [Admin_login::class, 'form_login']);
Route::get('/admin-process-login', [Admin_login::class, 'login']);

//Administrator
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [Administrator::class, 'index']);
    // tambahkan rute lain untuk admin di sini
});


Route::get('/ceklog', [Administrator::class, 'ceklog']);
