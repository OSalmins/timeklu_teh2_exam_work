<?php

use App\Http\Controllers\AtableController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Models\Atable;
use App\Models\Table_kind;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/register', [AuthController::class,'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class,'showLogin'])->name('show.login');
Route::post('/register', [AuthController::class,'register'])->name('register');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');


Route::get('/marketplace',[AtableController::class,'index']);
Route::middleware('auth')->group(function () {
    /*Route::get('/marketplace/mylistings', [AtableController::class, 'mylistings']})->name('marketplace.mylistings');*/
    Route::get('/marketplace/create',[AtableController::class,'create']);
    Route::post('/marketplace',[AtableController::class,'store'])->name('marketplace.store');
    Route::get('/marketplace/{id}', [AtableController::class,'show']);
    Route::delete('/marketplace/{id}', [AtableController::class,'destroy'])->name('marketplace.delete');
});

