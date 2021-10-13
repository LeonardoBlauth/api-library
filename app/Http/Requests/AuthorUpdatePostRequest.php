<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorUpdatePostRequest extends FormRequest
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
            'nationality' => 'string|min:3',
            'birth_date' => 'date',
        ];
    }
}
