<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


// Route::get('/', function () {
//     return view('pages/home');
// });

Route::get('/', [MainController::class, 'holy']);