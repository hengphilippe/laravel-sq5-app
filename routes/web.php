<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\CategoryController;
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
    return view('front.index');
});

Route::get('/{category}', [CategoryController::class,'index']);

// ->middleware(['auth','verified']);
Route::get('/admin', function(){
    return view('admin.index');
});