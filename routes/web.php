<?php

use App\Http\Controllers\AtableController;
use Illuminate\Support\Facades\Route;
use App\Models\Atable;
use App\Models\Table_kind;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacts', function () {
    return view('contacts');
});



Route::get('/marketplace',[AtableController::class,'index']);
Route::get('/marketplace/create',[AtableController::class,'create']);
Route::post('/marketplace',[AtableController::class,'store'])->name('marketplace.store');

Route::get('/marketplace/{id}', [AtableController::class,'show']);
Route::delete('/marketplace/{id}', [AtableController::class,'destroy'])->name('marketplace.delete');
