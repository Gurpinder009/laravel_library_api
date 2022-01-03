<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BelongsToController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookOutOnLoanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WrittenByController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get("/",function(){
    return "It is working right now ";
});

Route::resource("/user",UserController::class);
Route::resource("/book",BookController::class);
Route::resource("/author",AuthorController::class);
Route::resource("/categories",CategoryController::class);
Route::resource("/belongs-to",BelongsToController::class);
Route::resource('/written-by',WrittenByController::class);
Route::resource('/book-out-on-loan',BookOutOnLoanController::class);
