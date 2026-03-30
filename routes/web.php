<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DokumenController;

Route::get('/', [MainController::class,'index']);
Route::get('/allBerita',[MainController::class,'allBerita']);
Route::get('/detailBerita/{id}',[MainController::class,'detailBerita']);
Route::get('/dok/{id}',[MainController::class,'dok']);

Route::get('/login',[AuthController::class,'login']);
Route::post('/authenticate',[AuthController::class,'authenticate']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/slider',SliderController::class);
Route::resource('/berita',BeritaController::class);
Route::resource('/master',MasterController::class);
Route::resource('/kategori',KategoriController::class);
Route::resource('/dokumen',DokumenController::class);