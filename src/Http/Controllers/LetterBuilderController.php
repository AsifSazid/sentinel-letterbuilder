<?php

namespace Sentinel\Letterbuilder\Http\Controllers;

class LetterBuilderController
{
    public function home()
    {
        return view('letterbuilder::frontend.home');
    }
    public function singletemplate()
    {
        return view('letterbuilder::frontend.single-template');
    }
    public function multipleTemplate()
    {
        return view('letterbuilder::frontend.multiple-templates');
    }
    public function howToUse()
    {
        return view('letterbuilder::frontend.how-to-use');
    }
    public function about()
    {
        return view('letterbuilder::frontend.about');
    }
    public function contact()
    {
        return view('letterbuilder::frontend.contact-us');
    }
}
