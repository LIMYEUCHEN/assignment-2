<?php

use App\Http\Controllers\PizzalistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzalist', [PizzalistController::class, 'index'])->middleware('auth');
Route::get('/pizzalist/create', [PizzalistController::class, 'create']);
Route::post('/pizzalist', [PizzalistController::class, 'store']);
Route::get('/pizzalist/{id}', [PizzalistController::class, 'show'])->middleware('auth');
Route::delete('/pizzalist/{id}', [PizzalistController::class, 'destroy'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
