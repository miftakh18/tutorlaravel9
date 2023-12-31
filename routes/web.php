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

Route::get('/', [studentController::class, 'index'])->name('index');
// Route::get('/greeting/{id}', [studentController::class, 'show']);

Route::get('/filter', [studentController::class, 'filter']);
// sesi show all data detail part 1
Route::get('/show/{id}', [studentController::class, 'show'])->name('show');
// inisial dengan name show di show data detail part 2

// sesi create
Route::get('/create', [studentController::class, 'create'])->name('create');
Route::post('/create', [studentController::class, 'store'])->name('store');

// sesi edit
Route::get('/edit/{student}', [studentController::class, 'edit'])->name('edit');
// Route::get('/edit/{student}', [studentController::class, 'edit'])->name('edit');
// patch merubah ke beberapa data yang di pilih
//  put merubah ke seluruh data 
Route::patch('/update/{student}', [studentController::class, 'update'])->name('update');

// sesi delete
Route::delete('/delete/{student}', [studentController::class, 'delete'])->name('delete');
