<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorStorePostRequest extends FormRequest
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
            'nationality' => 'string|min:3|required',
            'birth_date' => 'date|required',
        ];
    }
}
