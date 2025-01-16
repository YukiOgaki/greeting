<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/{comment}/{word?}', [CommentsController::class, 'comments']); //?で空白を許容
