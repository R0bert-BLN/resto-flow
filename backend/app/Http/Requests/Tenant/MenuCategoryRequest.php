<?php

namespace App\Http\Requests\Tenant;

use Illuminate\Foundation\Http\FormRequest;

class MenuCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'description' => ['nullable', 'string', 'max:1000'],
            'position' => ['nullable', 'integer', 'min:0'],
        ];

        if ($this->isMethod('POST')) {
            $rules['name'] = ['required', 'string'];
        } else {
            $rules['name'] = ['sometimes', 'nullable', 'string'];
        }

        return $rules;
    }
}
