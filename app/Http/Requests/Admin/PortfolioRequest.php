<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'portfolio_category_id' => 'required|exists:portfolio_categories,id',
            'title' => 'required|unique:portfolios,title',
            'slug' => 'required|unique:portfolios,slug',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'meta_robots' => 'required',
            'platform' => 'required',
            'language' => 'required',
            'db' => 'required',
            'tools' => 'required',
            'alt_tag' => 'required',
            'image' => 'mimes:png,jpeg,webp',
            'about_image' => 'mimes:png,jpeg,webp',
        ];
        if ($this->getMethod() == 'PATCH') {
            $rules['title'] = "required|max:230|unique:portfolios,title,NULL,id,deleted_at,NULL";
            $rules['slug'] = "required|max:230|unique:portfolios,slug,NULL,id,deleted_at,NULL";
        }
        return $rules;

    }
}
