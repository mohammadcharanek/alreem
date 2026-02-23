<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
Route::get('/', function () {
    return redirect('/en');
});




Route::group(['prefix' => '{locale}'], function () {

    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/branches', [PageController::class, 'branches'])->name('branches');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');

});