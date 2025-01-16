<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\WordController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/{comment}', [CommentsController::class, 'comments']);
Route::get('/comments/freeword/{word}', [WordController::class, 'word']);
