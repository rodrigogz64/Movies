<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MoviesController::class, 'index']);
Route::get('/movie/{movie}', [MoviesController::class, 'show'])->name('movies.show');

//Route::view('/','index');
//Route::view('/movie','show');

