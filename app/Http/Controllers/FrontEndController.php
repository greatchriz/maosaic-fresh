<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FrontEndController extends Controller
{
    public function home ()
    {
        return view('front-end.home');
    }

    public function services ()
    {
        return view('front-end.services');
    }

    public function faq ()
    {
        return view('front-end.faq');
    }

    public function contact ()
    {
        return view('front-end.contact');
    }

    public function about ()
    {
        return view('front-end.about');
    }

    public function creditCard ()
    {
        return view('front-end.credit-card');
    }

    public function career ()
    {
        return view('front-end.career');
    }

    // create a method personalOverdraft like the one above and return the view personal-overdraft.blade.php
    public function personalOverdraft ()
    {
        return view('front-end.personal-overdraft');
    }

}
