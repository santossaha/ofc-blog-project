<?php

namespace App\Http\Requests\Admin;

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
        // if($this->getMethod('post'))

        $rules = [
            "category_id" => "required|exists:blog_categories,id",
            "publish_date" => "required|date|date_format:Y-m-d|before:tomorrow",
            "description" => "required",
            "front_image_title" => "required",
            "front_image_alt" => "required",
            "image_title" => "required",
            "image_alt" => "required",
        ];

        if ($this->getMethod() == 'POST') {
            $rules['title'] = "required|max:230|unique:blogs,title,NULL,id,deleted_at,NULL";
            $rules['slug'] = "required|max:230|unique:blogs,slug,NULL,id,deleted_at,NULL";
        } else {
            $rules['title'] = 'required|string';
            $rules['slug'] = 'required|string';
        }

        return $rules;
    }
}
