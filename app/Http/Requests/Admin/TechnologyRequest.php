<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TechnologyRequest extends FormRequest
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
        if ($this->getMethod() == 'POST') {
            $rules['title'] = "required|max:230|unique:technologies,title,NULL,id,deleted_at,NULL";
            $rules['slug'] = "required|max:230|unique:technologies,slug,NULL,id,deleted_at,NULL";
        } else {
            $rules['title'] = 'required|string';
            $rules['slug'] = 'required|string';
            $rules['short_title'] = 'required|string';
        }
        return $rules;
    }
}
