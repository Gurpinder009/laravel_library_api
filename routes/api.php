<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BelongsToController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookOutOnLoanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WrittenByController;
use Illuminate\Support\Facades\Route;

Route::post('/users/login',[UserController::class,"login"]);
Route::middleware('auth:sanctum')->group(function(){
    Route::delete('/users/logout',[UserController::class,"logout"]);
    Route::resource("/users",UserController::class);
    Route::resource("/book",BookController::class);
    Route::resource("/author",AuthorController::class);
    Route::resource("/categories",CategoryController::class);
    Route::resource("/belongs-to",BelongsToController::class);
    Route::resource('/written-by',WrittenByController::class);
    Route::resource('/book-out-on-loan',BookOutOnLoanController::class);
});

