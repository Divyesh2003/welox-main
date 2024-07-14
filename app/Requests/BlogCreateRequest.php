<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreateRequest extends FormRequest
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
            'category_id' => ['required'],
        
            'name' => ['required'],
            'slug' => ['required','alpha_dash','regex:/^[0-9a-z-]+$/','unique:blogs'],
          
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'category_id.required' => 'Catedory is Required',
            'name.required' => 'Name id is Required',
            'slug.required' => 'Slug is Required',
            'slug.unique' => 'Slug Must be Unique',
            'slug.alpha_dash' => 'Please write Underscore and Dashes',
            'slug.regex' => 'Please Enter LowerCase and Number',
          

        ];
    }
}
