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


Route::get('/', function() {
    return view('pages.front.home');
});

Route::get('/news', function() {
    return view('pages.front.news');
});

Route::get('/detail', function() {
    return view('pages.front.single-detail');
});

// Route::get('/admin', function() {
//     return view('admin.home');
// })->middleware(['auth','verified']);