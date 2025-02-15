<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/navbar', [NavbarController::class, 'index']);
