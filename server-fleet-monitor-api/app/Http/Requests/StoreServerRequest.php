<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreServerRequest extends FormRequest
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
            'hostname' => ['required', 'max:255'],
            'ip_address' => ['required', 'ip'],
            'environment' => ['required', 'max:50'],
            'os_type' => ['required', 'max:50'],
            'description' => ['required', 'max:255'],
        ];
    }
}
