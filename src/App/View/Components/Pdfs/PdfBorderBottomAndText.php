<?php

namespace Sentinel\Letterbuilder\App\View\Components\Pdfs;

use Illuminate\View\Component;

class PdfBorderBottomAndText extends Component{
    public function __construct()
    {
    }

    public function render()
    {
        return view('letterbuilder::components.pdf-components.borderBottomAndText');
    }
}