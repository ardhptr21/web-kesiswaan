<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/**----------------------------------------------
 * Pages Routes
 * Base Route: /
 * Description: Routes for the all pages
 *
 *---------------------------------------------**/
Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home')->name('pages.home');
});
