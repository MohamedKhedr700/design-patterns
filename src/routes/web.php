<?php

use App\Designs\AbstractFactory\Client\AbstractFactoryController;
use App\Designs\Factory\Client\FactoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/factory', FactoryController::class);
Route::get('/abstract-factory', AbstractFactoryController::class);
