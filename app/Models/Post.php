<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    protected $table = 'post';
    use HasFactory;

    public  function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id' );
    }
    public  function comments(){
        return $this->hasMany(Comment::class);
    }
}
