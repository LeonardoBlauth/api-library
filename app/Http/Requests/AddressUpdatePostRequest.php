<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressUpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'zip_code' => 'string|size:9',
            'country' => 'string|min:3',
            'city' => 'string|min:3',
            'street' => 'string|min:3',
            'number' => 'string',
            'complement' => 'string|max:200',
        ];
    }
}
