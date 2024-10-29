<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('add',[UserController::class,'addUser'])->name('add');
Route::get('user',[UserController::class,'index'])->name('get');
