<?php

namespace App\Http\Requests;

use App\Models\Category;
use App\Models\Length;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StuffStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer', Rule::exists(User::class, 'id')],
            'date' => ['required', 'date:Y-m-d'],
            'category' => ['required', 'integer', Rule::exists(Category::class, 'id')],
            'subcategory' => ['required', 'integer', Rule::exists(SubCategory::class, 'id')],
            'specialist' => ['required', 'integer', Rule::exists(User::class, 'id')],
            'length' => ['required', 'integer', Rule::exists(Length::class, 'id')],
        ];
    }
}
