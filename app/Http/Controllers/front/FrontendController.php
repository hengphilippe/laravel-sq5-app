<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('front.pages.home.index',compact('categories'));
    }
    public function menu(){
        return view('front.pages.category.index');
    }
    public function article(){
        return view('front.pages.article.index');
    }
}
