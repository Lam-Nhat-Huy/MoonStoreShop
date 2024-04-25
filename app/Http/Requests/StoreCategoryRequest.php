<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        // category_models là tên database 
        return [
            'name' => 'required|unique:categories',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please fill in the category name',
            'name.unique' => "$this->name already exist",
        ];
    }
}
