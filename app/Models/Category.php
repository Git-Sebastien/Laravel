<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "title",
        "content",
        "author",
        "category_id"
    ];
    

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}


