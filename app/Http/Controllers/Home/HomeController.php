<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    public function __invoke()
    {
        $post = DB::table('posts')->orderByDesc('content')->get();
        $objectSort = $this->sortObjectByLast($post);
        return view('index',compact('objectSort'));
    }

    public function sortObjectByLast(Collection $post) :object
    {
        $data = null;
        foreach($post as $value){
            $data = $value;
        }

        return $data;
    }
}
