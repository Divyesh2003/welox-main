<?php

namespace App\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CategoryCreateRequest extends FormRequest
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
            'name' => ['required'],
            'slug' => ['required','alpha_dash','regex:/^[0-9a-z-]+$/','unique:categories'],
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
        
            'name.required' => 'Name is Required',
            'slug.required' => 'Slug is Required',
            'slug.unique' => 'Enter Unique Slug ',
            'slug.alpha_dash' => 'Please Write Underscore and Dashes',
            'slug.regex' => 'Please Enter LowerCase and Number',
            
        ];
    }
}
