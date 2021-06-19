<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCatalogueRequest extends FormRequest
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
            'product_image_file' => 'required',
            'product_name' => 'required',
            'product_unit_price' => 'required',
            'product_qty' => 'required',
            'product_discount' => 'required',
            'product_categories' => 'required|not_in:0'
        ];
    }
}
