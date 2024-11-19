<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryStoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [categoryStoreController::class, 'index']);
Route::post('/post_category', [CategoryStoreController::class, 'store']);
Route::post('/delete_category', [CategoryStoreController::class, 'delete']);