<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home_tem');
});

Route::get('/home_tem', function () {
    return view('home_tem');
});



Auth::routes();

Route::get('/',  [App\Http\Controllers\Shop\MainController::class, 'index']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
