<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserInfo extends Component
{

    public $name;

    public $email;

    public $createdAt;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$email,$createdAt)
    {
        $this->name = $name;
        $this->email = $email;
        $this->createdAt = $createdAt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-info');
    }
}
