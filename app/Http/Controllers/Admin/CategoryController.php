<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Sanctum\Contracts\HasAbilities;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.pages.category.index');
    }

    public function setCategoy() {
        if(!Gate::allows('checkAdmin')) {
            abort(403);
        }else{
            return "Hello! just for admin user only";  
        }
 
    }
}
