<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlShortenerController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/api/shortener', [UrlShortenerController::class, 'index']);
Route::get('/api/shortener-list', [UrlShortenerController::class, 'list']);

