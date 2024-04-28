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
Route::get('/', [Admin_login::class, 'form_login'])->name('admin.login');
Route::get('/admin-login', [Admin_login::class, 'form_login'])->name('admin.form_login');
Route::post('/admin-process-login', [Admin_login::class, 'login'])->name('admin.login_proccess');

//Administrator
//Route::middleware(['auth:admin'])->group(function () {
  //  Route::get('/dashboard', [Administrator::class, 'index']);
    // tambahkan rute lain untuk admin di sini
//});

Route::middleware(['auth:admin', 'admin.role:superadmin'])->group(function () {
    Route::get('/dashboard', [Administrator::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [Admin_login::class, 'logout'])->name('admin.logout');
});

Route::middleware(['auth:admin', 'admin.role:admin,superadmin'])->group(function () {
    Route::get('/dashadmin',  [Administrator::class, 'index'])->name('admin1.dashboard');
});

Route::middleware(['auth:admin', 'admin.role:cs,superadmin'])->group(function () {
    Route::get('/dashcs',  [Administrator::class, 'index'])->name('cs.dashboard');
});

Route::get('/ceklog', [Administrator::class, 'ceklog']);
