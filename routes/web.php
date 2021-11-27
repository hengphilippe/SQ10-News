<?php

use App\Http\Controllers\ArticlesController;
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



Route::get('/', [ArticlesController::class, 'index']);
Route::get('/article/{article}', [ArticlesController::class, 'show']);


Route::get('/admin', function() {
    return view('admin.index');
})->middleware(['auth','verified']);