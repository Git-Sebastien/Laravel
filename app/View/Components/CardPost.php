<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class CardPost extends Component
{

    public $title;
    
    public $content;

    public $created_at;

    public $updated_at;

    public $author;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$content)
    {
        $this->title = $title;
        $this->content = $content;        
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
