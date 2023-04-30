<?php

use App\Http\Controllers\Dashboard\settingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostsController;
use App\Http\Controllers\Website\CategoryController as WebsiteCategoryController;
use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Dashboard\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/

// Website

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/categories/{category}', [WebsiteCategoryController::class, 'show'])->name('category');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post');




// Dashboard

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'checkLogin']], function () {
    Route::get('/', function () {
        return view('dashboard.layouts.layout');
    })->name('dashboard');

    Route::get('/settings', [settingController::class, 'index'])->name('settings');

    Route::post('/settings/update/{setting}', [settingController::class, 'update'])->name('settings.update');

    Route::get('/users/all', [UserController::class, 'getUsersDataTable'])->name('users.all');
    Route::post('/users/delete', [UserController::class, 'delete'])->name('users.delete');

    Route::get('/category/all', [CategoryController::class, 'getCategoryDataTable'])->name('category.all');
    Route::post('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/posts/all', [PostController::class, 'getPostsDataTable'])->name('posts.all');
    Route::post('/posts/delete', [PostController::class, 'delete'])->name('posts.delete');

    Route::resources([
        'users' => UserController::class,
        'category' => CategoryController::class,
        'posts' => PostController::class,
    ]);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
