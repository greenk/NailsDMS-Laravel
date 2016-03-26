<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateNewEmployeeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        
		// Return true so the request can go through
		return true;
		
		//return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
			'e_first_name' => 'required|string',
			'e_last_name' => 'required|string',
			'e_password' => 'required',
			'e_phone' => 'required|numeric',
        ];
    }
}
