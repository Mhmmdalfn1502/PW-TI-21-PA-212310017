<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Profile', [ProfileController::class, 'index']);
Route::get('/Profile/identity', [ProfileController::class, 'identity']);
Route::get('/Profile/family', [ProfileController::class, 'family']);
