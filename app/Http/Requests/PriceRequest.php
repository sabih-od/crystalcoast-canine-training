<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'pricing_category_id' => 'required',
            'price'=>'required'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required!',
            'pricing_category_id.required' => 'Price Category is required!',
            'description' => 'Description is required!',
            'price.required' => 'Price is required!',
        ];
    }

}
