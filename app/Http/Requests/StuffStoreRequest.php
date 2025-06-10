<?php

namespace App\Http\Requests;

use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StuffStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'date' => ['required', 'date:Y-m-d'],
            'service_id' => ['required', 'integer', Rule::exists(Service::class, 'id')],
        ];
    }
}
