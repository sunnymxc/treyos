<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAgentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
        	'email' => 'required|string|email|max:255',
        	'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|max:11',
        	'address' => 'required|string|max:255',
        	'selfie_path' => 'required|image|mimes:jpg,jpeg,png,|max:2048',
        	'id_path' => 'required|image|mimes:jpg,jpeg,png,|max:2048',
        	'selfie_id' => 'required|image|mimes:jpg,jpeg,png,|max:2048',	
        ];
    }
}
