<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [studentController::class, 'index']);
// Route::get('/greeting/{id}', [studentController::class, 'show']);

Route::get('/filter', [studentController::class, 'filter']);
// sesi show all data detail part 1
Route::get('/show/{id}', [studentController::class, 'show']);
