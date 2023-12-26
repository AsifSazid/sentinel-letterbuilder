<?php

namespace Sentinel\Letterbuilder\Http\Controllers;

class LetterBuilderBNController
{
    public function home()
    {
        return view('letterbuilder::frontend.bn.home');
    }
    public function singletemplate()
    {
        return view('letterbuilder::frontend.bn.single-template');
    }
    public function multipleTemplate()
    {
        return view('letterbuilder::frontend.bn.multiple-templates');
    }
    public function howToUse()
    {
        return view('letterbuilder::frontend.bn.how-to-use');
    }
    public function about()
    {
        return view('letterbuilder::frontend.bn.about');
    }
    public function contact()
    {
        return view('letterbuilder::frontend.bn.contact-us');
    }
}
