<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

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

Route::get('/i', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('login');
// });
Route::controller(LoginController::class)->group(function (){
Route::get('/','login');
Route::post('/login','masuk');
Route::get('/logout','keluar');
});
Route::controller(MemberController::class)->group(function (){
Route::get('/member','read')->middleware('auth');
Route::post('/cari','cari')->middleware('auth');
Route::get('/create','create')->middleware('auth');
Route::post('/create','input')->middleware('auth');
Route::get('/delete-member/{id}','delete');
});
route::controller(ProdukController::class)->group(function(){
Route::get('/produk','read')->middleware('auth');
Route::get('/create-produk','create');
Route::post('/create-produk','input')->middleware('auth');
Route::get('/delete-produk/{id}','delete');
});
route::controller(KategoriController::class)->group(function(){
Route::get('/kategori','read')->middleware('auth');
Route::get('/create-kategori','create')->middleware('auth');
Route::post('/create-kategori','input')->middleware('auth');
Route::get('/delete-kategori/{id}','delete');
});
