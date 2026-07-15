<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ApprenticeController;

Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/frm_sumar', [OperacionesController::class, 'frm_sumar']);
Route::post('/sumar', [OperacionesController::class, 'sumar'])->name('sumar.store');

Route::resource('areas', AreaController::class);
Route::resource('training-centers', TrainingCenterController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('computers', ComputerController::class);
Route::resource('apprentices', ApprenticeController::class);
