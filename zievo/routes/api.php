<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//ROTAS

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/search', [BookController::class, 'searchByTitle']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{code}', [BookController::class, 'show']);
Route::put('/books/{code}', [BookController::class, 'update']);
Route::delete('/books/{code}', [BookController::class, 'destroy']);


