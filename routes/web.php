<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/food', [FoodController::class, 'index']);
Route::get('/food/create', [FoodController::class, 'create']);
Route::post('/food', [FoodController::class, 'store']);
Route::get('/food/{food}/edit', [FoodController::class, 'edit']);
Route::put('/food/{food}', [FoodController::class, 'update']);
Route::delete('/food/{food}', [FoodController::class, 'destroy']);
Route::get('/food/{food}', [FoodController::class, 'show']);


Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{category}', [CategoryController::class, 'update']);
Route::delete('/category/{category}', [CategoryController::class, 'destroy']);

Route::get('/FoodImageImage', [FoodImageController::class, 'index']);
Route::get('/FoodImage/create', [FoodImageController::class, 'create']);
Route::post('/FoodImage', [FoodImageController::class, 'store']);
Route::get('/FoodImage/{FoodImage}/edit', [FoodImageController::class, 'edit']);
Route::put('/FoodImage/{FoodImage}', [FoodImageController::class, 'update']);
Route::delete('/FoodImage/{FoodImage}', [FoodImageController::class, 'destroy']);
Route::get('/FoodImage/{FoodImage}', [FoodImageController::class, 'show']);