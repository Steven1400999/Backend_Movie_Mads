<?php

use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
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


Route::get('/token',[UserController::class, 'token']);



Route::get('/supplier_index', [SupplierController::class, 'index']);
Route::post('/supplier_store', [SupplierController::class, 'store']);
Route::post('/supplier_show', [SupplierController::class, 'show']);
Route::post('/supplier_edit', [SupplierController::class, 'edit']);
Route::post('/supplier_update', [SupplierController::class, 'update']);
Route::post('/supplier_destroy', [SupplierController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});
