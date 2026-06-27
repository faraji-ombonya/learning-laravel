<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\ServerEnvironment;
use App\Enums\OSType;

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
            'ip_address' => ['sometimes', 'ip'],
            'environment' => ['sometimes', 'max:50', Rule::enum(ServerEnvironment::class)],
            'os_type' => ['sometimes', 'max:50', Rule::enum(OSType::class)],
            'description' => ['sometimes', 'max:255'],
        ];
    }
}
