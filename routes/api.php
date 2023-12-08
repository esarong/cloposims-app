<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource(name:'/users', controller:UserController::class);

Route::apiResource(name:'/userstatuses', controller:UserStatusController::class);

Route::apiResource(name:'/transactions', controller:TransactionController::class);

Route::apiResource(name:'/transaction_items', controller:TransactionItemController::class);

Route::apiResource(name:'/inventory', controller:InventoryController::class);

Route::apiResource(name:'/inventory_category', controller:InventoryCategoryController::class);

Route::apiResource(name:'/inventory_unit', controller:InventoryUnitController::class);

Route::apiResource(name:'/supplier', controller:SupplierController::class);
