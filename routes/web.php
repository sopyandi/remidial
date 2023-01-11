<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProdukController;

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

Route::controller(MemberController::class)->group(function (){
Route::get('/','read');
Route::get('/create','create');
Route::post('/create','input');
Route::post('/cari','cari');
});
route::controller(ProdukController::class)->group(function(){
Route::get('/produk','read');
Route::get('/create-produk','create');
Route::post('/create-produk','input');
});