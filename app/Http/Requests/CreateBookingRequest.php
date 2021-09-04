<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookingRequest extends FormRequest
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
            'name' => 'required|string|max:255',
        	'email' => 'required|string|email|max:255',
        	'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|max:11',
        	'state_to' => 'required|string|max:255',
        	'address_to' => 'required|string|max:255',
        	'state_from' => 'required|string|max:255',
        	'address_from' => 'required|string|max:255',
        	'vehicle' => 'required|string|max:255',
        ];
    }
}
