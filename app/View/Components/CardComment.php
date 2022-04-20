<?php

namespace App\View\Components;


use App\Models\Post;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class CardComment extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {   
        $post_id = request()->route('post');
        $comments = DB::table('comment')
        ->select()
        ->where('post_id','=',$post_id)->get();

        return view('components.card-comment',compact('comments'));
    }
    
}
