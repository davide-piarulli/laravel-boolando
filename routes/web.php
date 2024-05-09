<?php

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
    $products = config('products');
    // QUI DA SISTEMARE, IN TEORIA DA AGGINGERE PRODUCTS NEL RETURN
    return view('homepage');
})->name('homepage');

Route::get('/donna', function () {
    return view('donna');
})->name('donna');

Route::get('/uomo', function () {
    return view('uomo');
})->name('uomo');

Route::get('/bambini', function () {
    return view('bambini');
})->name('bambini');
