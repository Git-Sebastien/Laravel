<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class backOffice extends Component
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
        $users = DB::table('users')
            ->join('role', 'role_id', '=', 'role.id')
            ->select('users.name', 'role.role','role_id','users.id')
            ->paginate(9);
        
        return view('components.back-office',compact('users'));
    }
}
