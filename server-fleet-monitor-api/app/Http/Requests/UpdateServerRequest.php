<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateServerRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'hostname' => ['sometimes', 'max:255'],
            'ip_address' => ['sometimes'],
            'environment' => ['sometimes', 'max:50'],
            'os_type' => ['sometimes', 'max:50'],
            'description' => ['sometimes', 'max:255'],
        ];
    }
}
