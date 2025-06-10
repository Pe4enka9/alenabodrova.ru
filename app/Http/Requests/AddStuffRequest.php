<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddStuffRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'phone' => ['required', 'string', Rule::unique(User::class, 'phone')],
            'surname' => ['required', 'string'],
            'patronymic' => ['string', 'max:40'],
            'experience' => ['required', 'integer', 'min:1'],
            'specializations' => ['required', 'array'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ];
    }
}
