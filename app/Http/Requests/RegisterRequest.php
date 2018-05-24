<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'       => 'required',
            'email'      => 'required',
            'department' => 'required',
            'phone'      => 'required',
            'role'       => 'required',
            'password'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'       => 'please enter your name',
            'email.required'      => 'please enter your email',
            'department.required' => 'please enter your email',
            'phone.required'      => 'please enter your phone number',
            'role.required'       => 'please enter your role',
            'password.required'   => 'please enter your password',
        ];

    }
}
