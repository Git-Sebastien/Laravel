<?php

namespace App\View\Components;

use App\Models\User;
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
        
        $user = User::all(['image_path','name','default_image']);
        
        
        // dd($item);


        return view('components.card-comment',compact('comments','user'));
    }

    public function sort($statement) 
    {
        $data = null;
        foreach($statement as $data){
            $statement = $data;
        }
        return $data;
    }
    
}
