<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/abouttheconvener', [HomeController::class, 'aboutTheConvener']);
Route::get('/missionvission', [HomeController::class, 'Mission']);
Route::get('/FAQ', [HomeController::class, 'FAQs']);
