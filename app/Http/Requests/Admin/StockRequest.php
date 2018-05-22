<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StockRequest extends FormRequest
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
            'name'         => 'required',
            'serialNumber' => 'required',
            'brand'        => 'required',
            'quantity'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'please enter your name',
            'serialNumber.required' => 'please enter your email',
            'brand.required'        => 'please enter your brand',
            'quantity.required'     => 'please enter your quantity',

        ];
    }
}
