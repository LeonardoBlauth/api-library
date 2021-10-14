<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'string|min:3|required',
            'last_name' => 'string|min:3|required',
            'code' => 'string|required',
            'phone' => 'string|size:15|required',
            'birth_date' => 'date|required',
            'entry_date' => 'date|required',
            'salary' => 'numeric|required',
            'address_id' => 'integer|exists:addresses,id|required',
            'role_id' => 'integer|exists:roles,id|required',
        ];
    }

    public function messages(): array
    {
        return [
            'phone.size' => 'The phone must have 15 characters and must be in the format (00) 00000-0000'
        ];
    }
}
