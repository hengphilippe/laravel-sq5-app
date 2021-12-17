<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title','body','cover','status','ping','reads','user_id','category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function humanDateTime() {
        return $this->created_at->diffForHumans();
    }
}
