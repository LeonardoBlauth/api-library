<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressStorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'zip_code' => 'string|size:9|required',
            'country' => 'string|min:3|required',
            'city' => 'string|min:3|required',
            'street' => 'string|min:3|required',
            'number' => 'string|required',
            'complement' => 'string|max:200',
        ];
    }

    public function messages() : array
    {
        return [
            'zip_code.size' => 'The zip code must have 9 characters and must be in the format 00000-000'
        ];
    }
}
