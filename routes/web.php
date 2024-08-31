<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainPageController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::push('/categories', [CategoryController::class, 'store'])->name('category.store');
