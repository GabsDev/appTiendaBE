<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeliveryManController;
use App\Http\Controllers\ProductController;

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

        //Rutas personal de entrega
        Route::group([
            'prefix' => 'staff/delivery'
        ], function ($router) {
            Route::get('', [DeliveryManController::class, 'index']);
            Route::get('all', [DeliveryManController::class, 'all'])->middleware(['auth:api']);
            Route::get('/{id}', [DeliveryManController::class, 'show']);
        });


        //Rutas ordenes
        Route::group([
            'prefix' => 'order'
        ], function ($router) {
            Route::get('', [OrderController::class, 'index']);
            Route::get('all', [OrderController::class, 'all'])->middleware(['auth:api', 'scopes:administrador']);
            Route::get('/{id}', [OrderController::class, 'show']);
        });

        //Rutas principales Productos
        Route::get('', [ProductController::class, 'index']);
        Route::get('all', [ProductController::class, 'all']);
        Route::get('/{id}', [ProductController::class, 'show']);
    });
});
