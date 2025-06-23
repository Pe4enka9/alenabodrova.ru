<?php

use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/subcategories/{category}', [SubcategoryController::class, 'getSubcategoriesByCategory'])->name('getSubcategoriesByCategory');
