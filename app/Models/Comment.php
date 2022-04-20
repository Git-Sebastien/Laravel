<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = 'comment';

    protected $fillable = [
        'content',
        'author',
        'email',
        'post_id'
    ];


    use HasFactory;
}
