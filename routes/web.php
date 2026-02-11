<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-the-convener', [HomeController::class, 'aboutTheConvener']);
Route::get('/mission-vission', [HomeController::class, 'Mission']);
Route::get('/FAQ', [HomeController::class, 'FAQs']);
Route::get('/Contact-Us', [HomeController::class, 'contactUs']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/seda', [HomeController::class, 'seda']);
Route::get('/conference', [HomeController::class, 'conference']);

Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/gallery/load', [GalleryController::class, 'load']);


Route::get('/gallery/{year}', [HomeController::class, 'showGallery'])->name('gallery.year');


Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/admin', [AuthController::class, 'loginPage'])->name('login');
Route::post('/admin', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
