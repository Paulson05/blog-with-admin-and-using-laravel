<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
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
    $posts = Post::all();
    $resentpost =  Post::orderBy('created_at', 'asc')->limit(3)->get();
    $popularpost =  Post::inRandomOrder()->orderBy('updated_at','desc')->limit(3)->get();
 $categories = Category::all();
    $alltags  =Category::with(['posts'])->get();

    return view('blogpages.home')->with([
        'posts' => $posts,
        'resentpost' => $resentpost,
        'popularpost' =>   $popularpost,
        'categories' => $categories,
        'alltags' => $alltags

    ]);
});
Route::get('categorypost/{id}', [CategoryPostController::class, 'categorypost'])->name('categorypost');

Route::get('singlepost/{post:slug}', [BlogController::class, 'singlepost'])->name('singlepost')->where('slug', '[\w\d\-\_]+');;
Route::get('admin', [AdminController::class, 'admin'])->name('admin');
Route::resource('post', PostController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::resource('category', CategoryController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::resource('comments', CommentsController::class)->only(['index','store','show','update','destroy','edit',  ]);

Route::resource('role', RoleController::class)->only(['index','store','show','update','destroy','edit', 'create'  ]);
Route::resource('permission', PermissionController::class)->only(['index','store','show','update','destroy','edit', 'create'  ]);
Route::resource('user', UserController::class)->only(['index','store','show','update','destroy','edit', 'create'  ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/getpdf', [pdfController::class, 'index'])->name('home');

