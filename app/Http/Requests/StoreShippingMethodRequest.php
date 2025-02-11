<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreShippingMethodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('product-manage');
        // return Gate::allows('all-access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'admin_shipping_id' => 'required|integer|exists:admin_shippings,id',
            'name' => 'required|string|in:umoja logistics,manual shipping',
           
        ];
    }



    public function messages()
    {
        return [
            'name.required' => 'The name must be umoja logistics or manual shipping is required.',
            
        ];
    }
}
