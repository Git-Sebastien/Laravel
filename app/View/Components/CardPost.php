<?php

namespace App\View\Components;

use Illuminate\View\Component;


class CardPost extends Component
{

    public $title;
    
    public $content;

    public $author;

    public $route;

  

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$content,$author,$route)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-post');
    }
}
