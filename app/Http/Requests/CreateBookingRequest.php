<?php

namespace App\Http\Requests;

use App\Models\Book;
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
        	'state_to' => 'required|string', 
        	'lga_to' => 'required|string',
        	'address_to' => 'required|max:255|text',
        	
        	'state_from' => 'required|string',
        	'lga_from' => 'required|string',
        	'address_from' => 'required|max:255|text',
        	
        	'vehicle' => 'required|string',
        	'goods' => 'required|string',
        	'dom' => 'required|string',
        	'description' => 'max:1000',
        ];
    }
}
