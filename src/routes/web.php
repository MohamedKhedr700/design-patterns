<?php

use App\Designs\AbstractFactory\Client\AbstractFactoryController;
use App\Designs\Builder\Client\BuilderController;
use App\Designs\Factory\Client\FactoryController;
use App\Designs\Singleton\Client\SingletonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abstract-factory', AbstractFactoryController::class);
Route::get('/builder', BuilderController::class);
Route::get('/factory', FactoryController::class);
Route::get('/singleton', SingletonController::class);
