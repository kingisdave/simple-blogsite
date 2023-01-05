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
        return [
            'title'=>'required|max:100',
            'body'=>'required',
            'blogImage'=>'image|max:1800'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>"Please fill the title field",
            'title.max'=>"Please input a maximum of 100 characters",
            'body.required'=>"Please fill the body field",
            'blogImage.image'=>"Please upload a correct image file",
            'blogImage.max'=>"Please upload a maximum of 1.8MB"
        ];
    }
}
