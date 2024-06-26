<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'password' => 'required',
            'cpassword' => 'required|same:password'
        ];
    }

    public function messages(): array
    {
        return [
            'password.required' => 'Password is required',
            'cpassword.required' => 'Confirm password is required',
            'cpassword.same' => 'Confirm password does not match the entered password',
        ];
    }
}
