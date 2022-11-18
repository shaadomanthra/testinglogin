<?php

use App\Http\Controllers\TestingController;

/* Testing Demo Routes */
Route::get('buttons', [TestingController::class, 'buttons'])->name('buttons');
Route::get('form', [TestingController::class, 'form'])->name('form');