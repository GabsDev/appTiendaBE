<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\DeliveryManController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VehicleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//http://127.0.0.1:8000/api/v1/product/
Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'product'], function () {

        //Rutas auth
        Route::group([
            'prefix' => 'auth'
        ], function ($router) {
            Route::post('login', [AuthController::class, 'login']);
            Route::post('register', [AuthController::class, 'register']);
            Route::post('logout', [AuthController::class, 'logout']);
        });

        //Rutas roles
        Route::group([
            'prefix' => 'rol'
        ], function ($router) {
            Route::get('', [RolController::class, 'index']);
        });

        //Rutas Vehiculos
        Route::group([
            'prefix' => 'vehicle'
        ], function ($router) {
            Route::get('', [VehicleController::class, 'index']);
        });

        //Rutas product Type
        Route::group([
            'prefix' => 'productType'
        ], function ($router) {
            Route::get('', [ProductTypeController::class, 'index']);
        });


        //Rutas features
        Route::group([
            'prefix' => 'features'
        ], function ($router) {
            Route::get('', [FeatureController::class], 'index')->middleware(['auth:api', 'scope:administrador']);
            Route::patch('/{id}', [FeatureController::class, 'update'])->middleware(['auth:api', 'scope:administrador']);
            Route::get('/{id}', [FeatureController::class, 'show'])->middleware(['auth:api', 'scope:administrador']);
        });

        //Rutas personal de entrega
        Route::group([
            'prefix' => 'staff/delivery'
        ], function ($router) {
            Route::get('', [DeliveryManController::class, 'index'])->middleware(['auth:api', 'scope:administrador']);
            Route::get('all', [DeliveryManController::class, 'all'])->middleware(['auth:api', 'scope:administrador']);
            Route::get('/{id}', [DeliveryManController::class, 'show'])->middleware(['auth:api', 'scope:administrador']);
            Route::post('create', [DeliveryManController::class, 'store'])->middleware(['auth:api', 'scopes:administrador']);
            Route::patch('update/{id}', [DeliveryManController::class, 'update'])->middleware(['auth:api', 'scopes:administrador']);
        });


        //Rutas ordenes
        Route::group([
            'prefix' => 'order'
        ], function ($router) {
            Route::get('', [OrderController::class, 'index'])->middleware(['auth:api', 'scope:administrador,despacho']);
            Route::get('all', [OrderController::class, 'all'])->middleware(['auth:api', 'scope:administrador,despacho']);
            Route::get('/{id}', [OrderController::class, 'show'])->middleware(['auth:api', 'scope:administrador,despacho']);
            Route::post('create', [OrderController::class, 'store'])->middleware(['auth:api', 'scope:administrador,despacho']);
        });




        //Rutas principales Productos
        Route::get('', [ProductController::class, 'index'])->middleware(['auth:api', 'scope:administrador,vendedor']);
        Route::get('all', [ProductController::class, 'all'])->middleware(['auth:api', 'scope:administrador,vendedor']);
        Route::post('create', [ProductController::class, 'store'])->middleware(['auth:api', 'scope:administrador']);
        Route::patch('update/{id}', [ProductController::class, 'update'])->middleware(['auth:api', 'scope:administrador']);
        Route::get('/{id}', [ProductController::class, 'show'])->middleware(['auth:api', 'scope:administrador,vendedor']);
    });
});
