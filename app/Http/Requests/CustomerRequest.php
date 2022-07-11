<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'id_products' => 'required|max:255',
            'name_cust' => 'required|max:255',
            'address' => 'required|max:255',
            'number' => 'required|max:13',
            'quantity' => 'required|integer'
        ];
    }
}
