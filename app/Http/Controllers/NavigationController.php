<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class NavigationController extends Controller
{ 
     public function certify(): View
    {
        return view('pages.certificate-home');
    }
    public function license(): View
    {
        return view('pages.license');
    }
}
