<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticlesController;

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

Route::middleware(['auth', 'verified'])
    ->prefix('admin')->group(function () {
    // Route::get('/', function () {
    //     // Matches The "/admin/users" URL
    //     return view('admin.index');
    // });

    Route::get('/users', [UsersController::class,'index']);

    Route::get('/article', [ArticlesController::class,'index'])->name('admin-article');
    Route::get('/article/create', [ArticlesController::class,'create'])->name('admin-article-create');
    Route::post('/article/save',[ArticlesController::class,'save'])->name('save_article');
    Route::post('/article/tinymce/upload',[ArticlesController::class,'tinyupload'])->name("handle_tiny_upload");
});