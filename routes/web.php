<?php

use Illuminate\Support\Facades\Route;

Route::get('{slug}', [\App\Http\Controllers\PageDisplayController::class, 'show'])->name('frontend.page'); 
