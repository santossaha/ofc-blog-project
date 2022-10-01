<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PagesRequest extends FormRequest
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
            'meta_title' => 'required|string',
            'meta_keyword' => 'required|string',
            'meta_description' => 'required|string',
            'meta_robots' => 'required|string'
        ];
        if ($this->getMethod() == 'POST') {
            $rules['title'] = 'required|string';
            $rules['slug'] = 'required|string|unique:pages,title';
        } else {
            $rules['title'] = 'required|string';
            $rules['slug'] = 'required|string';
        }
        return $rules;
    }
}
