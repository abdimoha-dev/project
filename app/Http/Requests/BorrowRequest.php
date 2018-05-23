<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BorrowRequest extends FormRequest
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
            'category' => 'required',
            'itemName' => 'required',
            'urgency'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'please select your category',
            'itemName.required' => 'please enter item name',
            'urgency.required'  => 'please selct your urgency',
        ];

    }
}
