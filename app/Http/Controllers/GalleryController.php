<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('Home.gallery');
    }

    public function load(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 6;
        $imagesDir = public_path('assets/img/gallery');
        $allImages = array_values(array_filter(scandir($imagesDir), fn($f) => !in_array($f, ['.', '..'])));
        $totalImages = count($allImages);

        $start = ($page - 1) * $perPage;
        $images = array_slice($allImages, $start, $perPage);

        $images = array_map(fn($img) => asset("assets/img/gallery/$img"), $images);

        return response()->json([
            'images' => $images,
            'hasMore' => $start + $perPage < $totalImages,
        ]);
    }
}
