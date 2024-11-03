<?php

use App\Http\Controllers\RedirectToOriginalUrlController;
use App\Http\Middleware\CountVisitsMiddleware;
use App\Livewire\CountVisits;
use App\Livewire\ShortenUrl;
use Illuminate\Support\Facades\Route;

Route::get('/', ShortenUrl::class);
Route::get('/{url:code}', RedirectToOriginalUrlController::class)->middleware(CountVisitsMiddleware::class);
Route::get('/{url:code}/visits', CountVisits::class);
