<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
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

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('login')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [HomeController::class, 'detail'])->name('detail');

Route::get('/buku', [BookController::class, 'index'])->name('buku');

Route::get('/tambahbuku', [BookController::class, 'tambahbuku'])->name('tambahbuku');
Route::post('/insertdata', [BookController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [BookController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [BookController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete');

Route::get('/prodview', [TestController::class, 'prodfunc']);

Route::get('get/details/{id}', [internalAuditController::class, 'getDetails'])->name('getDetails');