<?php

use App\Patterns\Creational\AbstractFactory\Client\AbstractFactoryController;
use App\Patterns\Creational\Builder\Client\BuilderController;
use App\Patterns\Creational\Factory\Client\FactoryController;
use App\Patterns\Creational\Prototype\Client\PrototypeController;
use App\Patterns\Creational\Singleton\Client\SingletonController;
use App\Patterns\Structural\Adapter\Client\AdapterController;
use App\Patterns\Structural\Bridge\Client\BridgeController;
use App\Patterns\Structural\Composite\Client\CompositeController;
use App\Patterns\Structural\Decorator\Client\DecoratorController;
use App\Patterns\Structural\Facade\Client\FacadeController;
use App\Patterns\Structural\Proxy\Client\ProxyController;
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
Route::get('/decorator', DecoratorController::class);
Route::get('/facade', FacadeController::class);
Route::get('/proxy', ProxyController::class);
