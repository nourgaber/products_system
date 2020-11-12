<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
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
            'products.*' => 'required|array|min:1',
            'products' => 'required',
            'currency_id' => 'exists:currencies,id',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer'
        ];
    }
}
