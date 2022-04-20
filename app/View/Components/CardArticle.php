<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardArticle extends Component 
{
    public $title;

    public $content;

    public $author;

    public $id;
 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$content,$author,$id)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->id = $id;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-article');
    }
}
