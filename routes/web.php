<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludosController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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


Route::get('/product/create',[ProductController::class,'create']);
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');




Route::get('/category/create',[CategoryController::class,'create']);
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');


Route::get('/frm_sumar',[OperacionesController::class,'frm_sumar']);
Route::post('/sumar',[OperacionesController::class,'sumar'])->name('sumar.store');
