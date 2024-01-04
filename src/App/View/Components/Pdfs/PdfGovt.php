<?php

namespace Sentinel\Letterbuilder\App\View\Components\Pdfs;

use Illuminate\View\Component;

class PdfGovt extends Component{
    public function __construct()
    {
    }

    public function render()
    {
        return view('letterbuilder::components.pdf-components.govt');
    }
}