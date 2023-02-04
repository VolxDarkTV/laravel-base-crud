<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


// Route::get('/', function () {
//     return view('pages/home');
// });

Route::get('/', [MainController::class, 'home']) -> name('home');

// Single Product Show
Route::get('/holy/show{id}', [MainController::class, 'show']) 
    -> name('holy.show');

// --- CREATE
Route :: get('/holy/create', [MainController :: class, 'create']) 
    -> name('holy.create');

Route :: post('/holy/store', [MainController :: class, 'store']) 
    -> name('holy.store');

// Destroy
Route::get('/holy/destroy{id}', [MainController::class, 'destroy']) 
    -> name('holy.destroy');