<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => 'string',
            'client_id' => 'integer|exists:clients,id',
            'employee_id' => 'integer|exists:employees,id',
            'owner_id' => 'integer|exists:owners,id',
            'email' => 'email|required|unique:users',
            'password' =>  'string|min:9',
        ];
    }
}
