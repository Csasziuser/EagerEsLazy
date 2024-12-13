<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lazy-loading', [DemoController::class, 'lazyLoading']);
Route::get('/eager-loading', [DemoController::class, 'eagerLoading']);
