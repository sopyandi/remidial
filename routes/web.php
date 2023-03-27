<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;

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
route::controller(PenjualanController::class)->group(function(){
Route::get('/','read');
Route::get('/create-penjualan','create');
Route::post('/create-penjualan','input');
Route::get('/edit-penjualan/{id}','edit');
Route::post('/edit-penjualan','update');
Route::get('/delete-penjualan/{id}','delete');
});
