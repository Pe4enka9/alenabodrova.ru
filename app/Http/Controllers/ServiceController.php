<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class ServiceController extends Controller
{
    // Вывод всех услуг
    public function index(): View
    {
        $categories = Category::with('subcategories.services.specialization')->get();

        foreach ($categories as $category) {
            foreach ($category->subcategories as $subcategory) {
                $subcategory->grouped_services = $subcategory->services->groupBy('specialization_id');
            }
        }

        return view('services', [
            'categories' => $categories,
        ]);
    }
}
