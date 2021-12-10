<?php

namespace App\View\Components\Front\right_sidebar;

use Illuminate\View\Component;

class menu_image extends Component
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
        return view('components.front.right_sidebar.menu_image');
    }
}
