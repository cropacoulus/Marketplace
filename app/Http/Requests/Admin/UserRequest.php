<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:50', 
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->user)], // mengatasi validasi email yang sama dengan yang lama
            'roles' => 'nullable|string|in:ADMIN,USER'
        ];
    }
}
