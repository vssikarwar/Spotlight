<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }
    public function privacyPolicy()
    {
        return view('frontend.home.privacyPolicy');
    }
}
