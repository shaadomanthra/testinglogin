<?php

use App\Http\Controllers\TestingController;

/* Testing Demo Routes */
Route::get('buttons', [TestingController::class, 'buttons'])->name('buttons');
Route::get('form', [TestingController::class, 'form'])->name('form');
Route::get('form2', [TestingController::class, 'form2'])->name('form2');
Route::get('form3', [TestingController::class, 'form3'])->name('form3');
Route::get('elements', [TestingController::class, 'elements'])->name('elements');
Route::get('elements2', [TestingController::class, 'elements2'])->name('elements2');
Route::get('elements3', [TestingController::class, 'elements3'])->name('elements3');
Route::get('elements4', [TestingController::class, 'elements4'])->name('elements4');