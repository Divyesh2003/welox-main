<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryCreateRequest extends FormRequest
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
            'slug' => ['required','alpha_dash','regex:/^[0-9a-z-]+$/','unique:blog_categories'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
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

            // 'parent_id.required' => 'parent id is Required',

            'name.required' => 'Name id is Required',

            'slug.required' => 'Slug is Required',
            'slug.unique' => 'Slug Must be Unique',
            'slug.alpha_dash' => 'Please write Underscore and Dashes',
            'slug.regex' => 'Please Enter LowerCase and Number',
            'meta_title' =>'Meta Title id is Required',
            'meta_description' => 'Meta Description id is Required',
        ];
    }
}
