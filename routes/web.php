<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;


Route::get('/', [MessageController::class, 'create'])->name('contact');
Route::post('/', [MessageController::class, 'store']);
