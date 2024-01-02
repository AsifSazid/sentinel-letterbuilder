<?php

namespace Sentinel\Letterbuilder\App\View\Components\Layouts\Partials;

use Illuminate\View\Component;

class FooterBN extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('letterbuilder::components.frontend.bn.layouts.partials.footer');
    }
}
