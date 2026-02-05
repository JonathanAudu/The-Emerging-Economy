<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

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
        return view('gallery.index');
    }

    public function showGallery($year) {
        $directory = public_path('assets/img/' . $year);

        $images = [];
        if (is_dir($directory)) {
            $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
            foreach ($rii as $file) {
                if ($file->isDir()) continue;
                $ext = strtolower($file->getExtension());
                if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
                    // Get the path relative to public/
                    $relativePath = str_replace(public_path() . '/', '', $file->getPathname());
                    $images[] = $relativePath;
                }
            }
        }

        return view('gallery.show', [
            'year' => $year,
            'images' => $images,
        ]);
    }
}
