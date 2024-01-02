<?php

namespace Sentinel\Letterbuilder\App\View\Components\Layouts\Partials;

use Illuminate\View\Component;

class Header extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('letterbuilder::components.frontend.layouts.partials.header');
    }
}
