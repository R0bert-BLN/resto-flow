<?php

namespace App\Http\Requests\Tenant;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'description' => ['nullable', 'string', 'max:1000'],
            'phone' => ['nullable', 'string', 'max:20'],
            'logo' => ['nullable', 'string', 'url'],
        ];

        if ($this->isMethod('POST')) {
            $rules['name'] = ['required', 'string', 'max:255'];
        } else {
            $rules['name'] = ['sometimes', 'nullable', 'string', 'max:255'];
        }

        return $rules;
    }
}
