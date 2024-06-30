<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index');
    }

    public function aboutTheConvener()
    {
        return view('Home.abouttheconvener');
    }

    public function Mission() {
        return view('Home.missionvission');
    }

    public function FAQs() {
        return view('Home.FAQ');
    }
}
