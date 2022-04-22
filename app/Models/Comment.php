<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{

    protected $table = 'comment';

    protected $fillable = [
        'content',
        'author',
        'email',
        'post_id',
        'user_id'
    ];

    use HasFactory;
}
