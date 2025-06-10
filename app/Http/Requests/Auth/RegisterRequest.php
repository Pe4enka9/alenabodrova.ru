<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'phone' => ['required', 'string', Rule::unique(User::class, 'phone')],
            'surname' => ['required', 'string'],
            'patronymic' => ['string', 'max:40'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'rules' => ['required', 'accepted'],
        ];
    }
}
