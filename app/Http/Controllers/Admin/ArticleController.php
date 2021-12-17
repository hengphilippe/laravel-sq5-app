<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::where('status',1)->get();
        return view('admin.pages.article.index',['articles'=>$articles]);
    }

    public function create() {
        $category = Category::all();
        return view('admin.pages.article.create',['categories' => $category]);
    }

    public function uploader(Request $request) {
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('article', $name , 'public');
        return response()->json(['location'=>"/storage/$path"]);
    }

    public function save() {
        // return "saving article here";
        // perform validation by ur own
        $coverName = auth()->user()->id . "_" . time() . "." . request()->file('cover')->extension();
        $coverPath = request()->file('cover')->storeAs('aticles', $coverName, 'public');
        // 1_12312312312.png;
        Article::create([
            'title' => request()->title,
            'body' => request()->content,
            'cover' => "/storage/$coverPath",
            'user_id' => auth()->user()->id,
            'category_id'=>request()->category
        ]); 

        return "Created";
    }
}
