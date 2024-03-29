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
Route::get('demo', function () {
    return view('zeiss-demo-home');
});

Route::get('words-cloud', function () {
    return view('zeiss-demo-words-cloud');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/words1', function () {
    return view('word-cloud1');
});
Route::get('/words2', function () {
    return view('word-cloud2');
});
Route::get('/words3', function () {
    return view('word-cloud3');
});
