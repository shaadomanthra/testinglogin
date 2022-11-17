<?php

use App\Http\Controllers\TestingController;


 Route::get('buttons', [TestingController::class, 'buttons'])
                ->name('buttons');