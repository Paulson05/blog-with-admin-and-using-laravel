<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
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
    return view('blogpages.home');
});
Route::get('admin', [AdminController::class, 'admin'])->name('admin');
Route::resource('post', PostController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::resource('category', CategoryController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
