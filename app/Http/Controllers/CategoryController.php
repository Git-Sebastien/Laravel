<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getCategory($id)
    {
        $posts = DB::table('posts')
        ->select()
        ->where('category_id','=',$id)->get();
        return view('posts.post',compact('posts'));
    }
}
