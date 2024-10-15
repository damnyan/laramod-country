<?php

use Illuminate\Support\Facades\Route;
use Modules\Country\Http\Controllers\CountryController;

Route::get('country', [CountryController::class, 'index'])
    ->name('country');
