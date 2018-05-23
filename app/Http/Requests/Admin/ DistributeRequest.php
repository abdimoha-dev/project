<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class  DistributeRequest extends FormRequest
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
            'categoryId'   => 'required',
            'ItemName'     => 'required',
            'brand'        => 'required',
            'duration'     => 'required',
            'serialNumber' => 'required',
            'quantity'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'categoryId.required'   => 'please',
            'ItemName.required'     => 'please',
            'brand.required'        => 'please',
            'serialNumber.required' => 'please',
            'quantity.required'     => 'please',


        ];
    }
}
