<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerUpdatePostRequest extends FormRequest
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
            'phone' => 'string|size:15',
            'birth_date' => 'date',
            'address_id' => 'integer|exists:addresses,id',
        ];
    }

    public function messages(): array
    {
        return [
            'phone.size' => 'The phone must have 15 characters and must be in the format (00) 00000-0000'
        ];
    }
}
