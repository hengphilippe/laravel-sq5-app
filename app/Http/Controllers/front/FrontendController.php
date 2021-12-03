<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('front.pages.home.index');
    }
    public function menu(){
        return view('front.pages.category.index');
    }
    public function article(){
        return view('front.pages.article.index');
    }
}
