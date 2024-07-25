<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'short_description' => 'required',
            'description' => 'required',
            'button_text' => 'required',
            'heading' => 'required',
            'photo' => 'required',
        ];
        if ($this->input('is_feature') == 1) {
            $rules['sub_heading'] = 'required';
            $rules['written_by'] = 'required';
        }
        
        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required!',
            'short_description.required' => 'Short Description is required!',
            'description.required' => 'Description is required!',
            'heading.required' => 'Heading is required!',
            'button_text.required' => 'Button Text is required!',
            'photo.required' => 'Image is required!',
            'sub_heading.required' => 'Article Sub Title is required when Is Article is checked!',
            'written_by.required' => 'Article Written By is required when Is Article is checked!',
        ];
    }

}
