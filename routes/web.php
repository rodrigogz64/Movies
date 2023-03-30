<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MoviesController::class, 'index']);

//Route::view('/','index');
Route::view('/movie','show');

