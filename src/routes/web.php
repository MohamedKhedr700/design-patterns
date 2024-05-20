<?php

use App\Http\Controllers\AbstractFactoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abstract-factory', AbstractFactoryController::class);
