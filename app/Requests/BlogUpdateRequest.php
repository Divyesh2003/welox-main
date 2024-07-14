<?php

namespace App\Requests;
use Illuminate\Validation\Rule;


use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
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
            // 'slug' => ['required','alpha_dash','regex:/^[0-9a-z-]+$/', Rule::unique('blogs')->ignore($this->blog)],
            'slug' => ['required','alpha_dash','regex:/^[0-9a-z-]+$/'],
            'meta_title' => ['required'],

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
            'category_id' => 'Catedory is Required',

            'name.required' => 'Name id is Required',

            'slug.required' => 'Slug is Required',
            'slug.unique' => 'Slug Must be Unique',
            'slug.alpha_dash' => 'Please write Underscore and Dashes',
            'slug.regex' => 'Please Enter LowerCase and Number',
            'meta_title.required' => 'Meta Title is Required'

            
        ];
    }
}
