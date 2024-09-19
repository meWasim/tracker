<?php

use Illuminate\Support\Facades\Route;
use Mewasim\Tracker\Http\Controllers\TrackerController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('tracker', [TrackerController::class, 'index'])->name('tracker.index');
});
