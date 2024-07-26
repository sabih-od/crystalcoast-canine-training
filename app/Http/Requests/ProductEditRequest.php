<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'name' => 'required',
            'product_category_id' => 'required',
            'description' => 'required',
            'price_category_ids' => 'required',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'product_category_id.required' => 'Category is required!',
            'price_category_ids.required' => 'At least One Category Price is required!',
            'description' => 'Description is required!',
        ];
    }

}
