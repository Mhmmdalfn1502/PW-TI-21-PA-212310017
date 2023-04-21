<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Quiz2Controller;
use App\Http\Controllers\Quiz3Controller;


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

Route::get('/about', [AboutController::class, 'index']);

Route::get('/Quiz2', [Quiz2Controller::class, 'Quiz2']);

Route::get('/Kuis3', [Quiz3Controller::class, 'Quiz3']);

Route::get('/', function () {
    return "Helloworld";
});


Route::get('/test', [Quiz2Controller::class, 'Quiz2']);