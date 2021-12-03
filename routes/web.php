<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\FrontendController;
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

// Route::get('/', function () {
//     return view('front.index');
// });

// Route::get('/home', function(){
//     return "Welcome to login, User ". Auth::user()->name;
// })->middleware('auth');

// Route::get('/admin', function(){
//     return view('admin.index');
// });

//Frontend
route::get('/', [FrontendController::class, 'index']);
route::get('/menu', [FrontendController::class, 'menu'])->name('menu');
route::get('/menu/article', [FrontendController::class, 'article'])->name('menu.article');

//Backend
route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
route::get('/admin/article', [ArticleController::class, 'index'])->name('admin.article');
