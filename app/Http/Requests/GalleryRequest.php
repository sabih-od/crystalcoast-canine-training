<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048', // 2048 KB = 2 MB
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Image is required!',
            'image.image' => 'The file must be a valid image!',
            'image.mimes' => 'The image must be a file of type: jpg, jpeg, png, webp!',
            'image.max' => 'The image should not exceed 2MB in size!',
        ];
    }

}
