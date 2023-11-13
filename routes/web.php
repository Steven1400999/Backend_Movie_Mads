<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Models\Product_category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/{path?}', 'welcome')
    ->where('path', '.*');

Route::get('/token', [UserController::class, 'token']);


//Supplier Controller
Route::get('/supplier_index', [SupplierController::class, 'index']);
Route::post('/supplier_store', [SupplierController::class, 'store']);
Route::post('/supplier_show', [SupplierController::class, 'show']);
Route::post('/supplier_edit', [SupplierController::class, 'edit']);
Route::post('/supplier_update', [SupplierController::class, 'update']);
Route::post('/supplier_destroy', [SupplierController::class, 'destroy']);

//Rol Controller
Route::get('/rol_index', [RolController::class, 'index']);
Route::post('/rol_store', [RolController::class, 'store']);
Route::post('/rol_show', [RolController::class, 'show']);
Route::post('/rol_edit', [RolController::class, 'edit']);
Route::post('/rol_update', [RolController::class, 'update']);
Route::post('/rol_destroy', [RolController::class, 'destroy']);


//Product_category Controller
Route::get('/product_category_index', [ProductCategoryController::class, 'index']);
Route::post('/product_category_store', [ProductCategoryController::class, 'store']);
Route::post('/product_category_show', [ProductCategoryController::class, 'show']);
Route::post('/product_category_edit', [ProductCategoryController::class, 'edit']);
Route::post('/product_category_update', [ProductCategoryController::class, 'update']);
Route::post('/product_category_destroy', [ProductCategoryController::class, 'destroy']);



//Product Controller
Route::get('/product_index', [ProductController::class, 'index']);
Route::post('/product_store', [ProductController::class, 'store']);
Route::post('/product_show', [ProductController::class, 'show']);
Route::post('/product_edit', [ProductController::class, 'edit']);
Route::post('/product_update', [ProductController::class, 'update']);
Route::post('/product_destroy', [ProductController::class, 'destroy']);

//Inventory Controller
Route::get('/inventory_index', [InventoryController::class, 'index']);
Route::post('/inventory_store', [InventoryController::class, 'store']);
Route::post('/inventory_show', [InventoryController::class, 'show']);
Route::post('/inventory_edit', [InventoryController::class, 'edit']);
Route::post('/inventory_update', [InventoryController::class, 'update']);
Route::post('/inventory_destroy', [InventoryController::class, 'destroy']);









Route::get('/', function () {
    return view('welcome');
});
