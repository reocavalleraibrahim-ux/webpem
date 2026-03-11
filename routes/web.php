<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class,'login']);
Route::post('/authenticate',[AuthController::class,'authenticate']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
