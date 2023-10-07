<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/greeting/{name}', function ($nama) {
    return
        view('example', ['nama' => $nama]);
});


// berfungsi untuk menamai routenya
// untuk mempermudah pemanggilan di setiap komponen
Route::get('/greetingw/{name}', function ($nama) {
    return 'Hello ' . $nama;
})->name('greet_with_name');
