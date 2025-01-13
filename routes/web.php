<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimezoneController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/{timezone}', [TimezoneController::class, 'timezone']

);
