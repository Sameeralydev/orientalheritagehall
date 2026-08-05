<?php

use App\Http\Controllers\VenueController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VenueController::class, 'home'])->name('home');
Route::get('/{page}', [VenueController::class, 'page'])->name('page');
Route::post('/enquire', [VenueController::class, 'enquiry'])->name('enquire.store');
