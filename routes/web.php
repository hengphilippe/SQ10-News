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
    return view('front.index');
});

Route::get('/admin', function() {
    return view('admin.index');
})->middleware('auth','verify');



Route::prefix('categories')->group(function () {
        Route::get('news',function () {
            return view('front.categories.news');
        })->name('category.news');
        
        Route::get('popular',function () {
            return view('front.categories.popular');
        })->name('category.popular');

        Route::get('webdesign',function () {
            return view('front.categories.webdesign');
        })->name('category.webdesign');

        Route::get('javascript',function () {
            return view('front.categories.javascript');
        })->name('category.javascript');

        Route::get('css',function () {
            return view('front.categories.css');
        })->name('category.css');

        Route::get('jquery',function () {
            return view('front.categories.jquery');
        })->name('category.jquery');

});