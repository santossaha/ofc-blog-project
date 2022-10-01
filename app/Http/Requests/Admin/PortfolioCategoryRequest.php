<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioCategoryRequest extends FormRequest
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
            "slug" => "required",
        ];
        if ($this->getMethod() == 'POST') {
            $rules['name'] = "required|max:230|unique:portfolio_categories,name,NULL,id,deleted_at,NULL";
            $rules['sort_name'] = "required|max:30|unique:portfolio_categories,sort_name,NULL,id,deleted_at,NULL";
        }else{
            $rules['name'] = "required";
            $rules['sort_name'] = "required";
        }
        return $rules;

    }
}
