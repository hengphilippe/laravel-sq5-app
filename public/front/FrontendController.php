<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class FrontendController extends Controller
{
    public function index(){
        return "Welcome";
        // $recentArticles = Article::where('status',1)
        //     ->orderBy('created_at','desc')->get();
        // dd($recentArticles);exit();
        // return view('front.pages.home.index');
    }
    // public function menu(){
    //     return view('front.pages.category.index');
    // }
    // public function article(){
    //     return view('front.pages.article.index');
    // }
}
