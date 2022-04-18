<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category_id' => 'required|max:1',
            'title' => 'required|min:5|max:30',
            'description' => 'required|min:10|max:150',
            'price' => 'required|digits_between:3,7',
        ];
    }
}
