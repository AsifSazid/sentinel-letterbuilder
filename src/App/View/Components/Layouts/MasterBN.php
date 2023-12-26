<?php

namespace Sentinel\Letterbuilder\App\View\Components\Layouts;

use Sentinel\Letterbuilder\App\View\Components\Layouts\Partial;
use Illuminate\View\Component;

class MasterBN extends Component
{
    public function __construct()
    {
        // update default value of $this->layoutConfig using session, db or config
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('letterbuilder::components.bn.layouts.master');
    }
}
