<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "welcome";
});

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profilee', [ProfileController::class, 'skillAcademic']);
Route::get('/profile/identity', [ProfileController::class, 'identity']);
Route::get('/profile/family', [ProfileController::class, 'family']);