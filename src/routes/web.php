<?php

use App\Designs\Creational\AbstractFactory\Client\AbstractFactoryController;
use App\Designs\Creational\Builder\Client\BuilderController;
use App\Designs\Creational\Factory\Client\FactoryController;
use App\Designs\Creational\Prototype\Client\PrototypeController;
use App\Designs\Creational\Singleton\Client\SingletonController;
use App\Designs\Structural\Adapter\Client\AdapterController;
use App\Designs\Structural\Bridge\Client\BridgeController;
use App\Designs\Structural\Composite\Client\CompositeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// creational
Route::get('/abstract-factory', AbstractFactoryController::class);
Route::get('/builder', BuilderController::class);
Route::get('/factory', FactoryController::class);
Route::get('/prototype', PrototypeController::class);
Route::get('/singleton', SingletonController::class);

// structural
Route::get('/adapter', AdapterController::class);
Route::get('/bridge', BridgeController::class);
Route::get('/composite', CompositeController::class);
