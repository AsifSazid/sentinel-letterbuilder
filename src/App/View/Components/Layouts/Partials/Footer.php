<?php

namespace Sentinel\Letterbuilder\App\View\Components\Layouts\Partials;

use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('letterbuilder::components.frontend.layouts.partials.footer');
    }
}
