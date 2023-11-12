<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
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


Route::post('login',[RegisterController::class,'login']);

//User Controller
Route::get('/user_index', [UserController::class, 'index']);
Route::post('/user_update', [UserController::class, 'update']);
Route::post('/user_destroy', [UserController::class, 'destroy']);
Route::post('/register', [RegisterController::class,'register']);

//Supplier Controller
Route::get('/supplier_index', [SupplierController::class, 'index']);
Route::post('/supplier_store', [SupplierController::class, 'store']);
Route::get('/supplier_show', [SupplierController::class, 'show']);
Route::get('/supplier_show', [SupplierController::class, 'show']);

Route::post('/supplier_edit', [SupplierController::class, 'edit']);
Route::post('/supplier_update', [SupplierController::class, 'update']);
Route::post('/supplier_destroy', [SupplierController::class, 'destroy']);

//Rol Controller
Route::get('/rol_index', [RolController::class, 'index']);
Route::post('/rol_store', [RolController::class, 'store']);
Route::get('/rol_show', [RolController::class, 'show']);
Route::post('/rol_edit', [RolController::class, 'edit']);
Route::post('/rol_update', [RolController::class, 'update']);
Route::post('/rol_destroy', [RolController::class, 'destroy']);


//Product_category Controller
Route::get('/product_category_index', [ProductCategoryController::class, 'index']);
Route::post('/product_category_store', [ProductCategoryController::class, 'store']);
Route::get('/product_category_show', [ProductCategoryController::class, 'show']);
Route::post('/product_category_edit', [ProductCategoryController::class, 'edit']);
Route::post('/product_category_update', [ProductCategoryController::class, 'update']);
Route::post('/product_category_destroy', [ProductCategoryController::class, 'destroy']);



//Product Controller
Route::get('/product_index', [ProductController::class, 'index']);
Route::post('/product_store', [ProductController::class, 'store']);
Route::get('/product_show', [ProductController::class, 'show']);
Route::post('/product_edit', [ProductController::class, 'edit']);
Route::post('/product_update', [ProductController::class, 'update']);
Route::post('/product_destroy', [ProductController::class, 'destroy']);

//Inventory Controller
Route::get('/inventory_index', [InventoryController::class, 'index']);
Route::post('/inventory_store', [InventoryController::class, 'store']);
Route::get('/inventory_show', [InventoryController::class, 'show']);
Route::post('/inventory_edit', [InventoryController::class, 'edit']);
Route::post('/inventory_update', [InventoryController::class, 'update']);
Route::post('/inventory_destroy', [InventoryController::class, 'destroy']);
Route::post('/inventory_update_stock', [InventoryController::class, 'updateemployee']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
