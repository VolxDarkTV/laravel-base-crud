<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


// Route::get('/', function () {
//     return view('pages/home');
// });

Route::get('/', [MainController::class, 'holy']);

// Single Product Show
Route::get('/holy/{id}', [MainController::class, 'show']);