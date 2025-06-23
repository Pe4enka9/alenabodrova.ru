<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubcategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class SubcategoryController extends Controller
{
    // Получение всех подкатегорий по категории
    public function getSubcategoriesByCategory(Category $category): JsonResponse
    {
        $subcategories = $category->subcategories;

        return response()->json(SubcategoryResource::collection($subcategories));
    }
}
