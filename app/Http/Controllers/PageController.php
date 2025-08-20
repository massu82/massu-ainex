<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //return view('index', ['showPreloader' => true]);
        return redirect()->route('landing_web');
    }

    public function landing_web()
    {
        return view('web.landing', ['showPreloader' => true]);
    }
}
