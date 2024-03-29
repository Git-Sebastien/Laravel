<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\Posts\PostsController;

class Comment extends Component
{

  public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {   
        return view('components.comment');
    }
}
