<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StadeController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('stade', StadeController::class);