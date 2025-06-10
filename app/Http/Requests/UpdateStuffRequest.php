<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStuffRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'patronymic' => ['string', 'max:40'],
            'experience' => ['required', 'integer', 'min:1'],
            'specializations' => ['required', 'array'],
        ];
    }
}
