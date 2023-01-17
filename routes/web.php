<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', function () {
    return view('login');
});
Route::controller(MemberController::class)->group(function (){
Route::get('/member','read');
Route::post('/cari','cari');
Route::get('/create','create');
Route::post('/create','input');
Route::get('/delete-member/{id}','delete');
});
route::controller(ProdukController::class)->group(function(){
Route::get('/produk','read');
Route::get('/create-produk','create');
Route::post('/create-produk','input');
Route::get('/delete-produk/{id}','delete');
});
route::controller(KategoriController::class)->group(function(){
Route::get('/kategori','read');
Route::get('/create-kategori','create');
Route::post('/create-kategori','input');
Route::get('/delete-kategori/{id}','delete');
});
