<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|min:3|required',
            'edition' => 'string|required',
            'publishing_company' => 'string|min:3|required',
            'publication_date' => 'date|size:10|required',
            'description' => 'string|between:50,500|required',
            'is_hard_covered' => 'boolean|required',
            'price' => 'numeric|required',
            'author_id' => 'integer|exists:authors,id|required',
            'gender_id' => 'integer|exists:genders,id|required',
            'color_id' => 'integer|exists:colors,id|required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'The title must be a string',
            'name.min' => 'The title must have at least 3 characters',
            'edition.string' => 'Edition must be a string',
            'publishing_company.string' => 'The publishing company must be a string',
            'publishing_company.min' => 'The publishing company must have at least 3 characters',
            'publication_date' => 'The publication date must be in the format \'yyyy-mm-dd\'',
            'description.string' => 'The description must be a string',
            'description.between' => 'The description must have at least 50 characters and a maximum of 500 characters',
            'is_hard_covered.boolean' => 'The is hard covered must be a boolean',
            'price.numeric' => 'The price must be a numeric',
            'author_id.integer' => 'The author id must be an integer',
            'author_id.exists' => 'The author id must be an existing author',
            'gender_id.integer' => 'The gender id must be an integer',
            'gender_id.exists' => 'The gender id must be an existing author',
            'color_id.integer' => 'The color id must be an integer',
            'color_id.exists' => 'The color id must be an existing author',
        ];
    }
}
