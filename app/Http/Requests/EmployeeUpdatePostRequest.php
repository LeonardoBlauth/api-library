<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'string|min:3',
            'last_name' => 'string|min:3',
            'code' => 'string',
            'phone' => 'string|size:15',
            'birth_date' => 'date|size:10',
            'entry_date' => 'date|size:10',
            'salary' => 'numeric',
            'address_id' => 'integer|exists:addresses,id',
            'role_id' => 'integer|exists:roles,id',
        ];
    }

    public function messages(): array
    {
        return [
            'phone.size' => 'The phone must have 15 characters and must be in the format (00) 00000-0000'
        ];
    }
}
