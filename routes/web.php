<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Kasircontroller;
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

Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('layout.v_template');
    });
    
     //--------------------------------------------------------------
    Route::get('/product',[Productcontroller::class, 'index'])->name('product');
    Route::get('/landing',[Productcontroller::class, 'landing'])->name('landing');
    Route::get('/konfirmasi',[Kasircontroller::class, 'konfirmasi'])->name('konfirmasi');
    Route::get('/product/detail/{id_product}',[Productcontroller::class,'detail']);
    Route::get('/product/add',[Productcontroller::class,'add']);
    Route::get('/product/search',[Productcontroller::class,'search']);
    Route::post('/product/insert',[Productcontroller::class,'insert']);
    Route::get('/product/edit/{id_product}',[Productcontroller::class,'edit']);
    Route::post('/product/update/{id_product}',[Productcontroller::class,'update']);
    Route::get('/product/delete/{id_product}',[Productcontroller::class,'delete']);
    Route::get('/kasir',[Kasircontroller::class, 'index'])->name('kasir');
    Route::get('/kasir/detail/{id_product}',[Kasircontroller::class,'detailpesan']);
    Route::post('/kasir/update/{id_product}',[Kasircontroller::class,'update']);
    
    Route::get('/konfirmasi/setujui/{id_transaksi}',[Kasircontroller::class,'setujui']);
    Route::get('/konfirmasi/batalkan/{id_transaksi}',[Kasircontroller::class,'batalkan']);
    
    
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});
Auth::routes();
