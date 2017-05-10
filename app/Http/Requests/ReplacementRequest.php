<?php

namespace HerramientasCela\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplacementRequest extends FormRequest
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
            'type' => 'required|numeric',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required|numeric'
        ];
    }
}
