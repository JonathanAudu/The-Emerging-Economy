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

    public function contactUs() {
        return view('Home.ContactUs');
    }

    public function gallery() {
        return view('Gallery.index');
    }

    public function showGallery($year){
        $directory = public_path('assets/img/' . $year);
        $images = glob($directory . '/*.{jpg,JPG,jpeg,png,gif}', GLOB_BRACE);

        $imagePaths = array_map(function ($path) {
            return 'assets/img/' . basename($path);
        }, $images);

        return view('gallery.show', [
            'year' => $year,
            'images' => $imagePaths,
        ]);
    }
}
