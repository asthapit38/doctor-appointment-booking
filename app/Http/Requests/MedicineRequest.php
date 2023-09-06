<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'sku' =>  'required|max:255|unique:medicines,sku',
            'stock' => 'required|numeric',
            'descriptions' => 'required',
            'price' => 'required|numeric',
            'company_name' => 'required|max:255',
            'expiry_date' => 'required|date'
        ];
    }
}
