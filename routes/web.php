<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\FrontendController;
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


//Frontend
route::get('/', [FrontendController::class, 'index']);
route::get('/menu', [FrontendController::class, 'menu'])->name('menu');
route::get('/menu/article', [FrontendController::class, 'article'])->name('menu.article');

//Backend



Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['prefix' => '/admin'], function(){
        route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        route::get('/category', [CategoryController::class, 'index'])->name('admin.category')->middleware('isAdmin');
        route::get('/article', [ArticleController::class, 'index'])->name('admin.article');
    });

});