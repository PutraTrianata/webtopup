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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/ml', function () {
    return view('ml');
});

Route::get('/ff', function () {
    return view('ff');
});

Route::get('/genshin', function () {
    return view('genshin');
});

Route::get('/pubg', function () {
    return view('pubg');
});

Route::get('/coc', function () {
    return view('coc');
});

Route::get('/lol', function () {
    return view('lol');
});

Route::get('/hok', function () {
    return view('hok');
});

Route::get('/valo', function () {
    return view('valo');
});

Route::get('/cr', function () {
    return view('cr');
});