<?php

namespace App\Frontend\Infrastructure\Forms;

use App\Http\Requests\Request;

class ExhibitorEntryFormRequest extends Request
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
            "name" => "required",
            "email" => "required",
            "address" => "required",
            "ph_no" => "required",
            "business_type" => "required",
        ];
    }
    public function messages(){
        return [
            "name.required" => "Name is required",
            "email.required" => "Email is required",
            "address.required" => "Address is required",
            "ph_no.required" => "Phone is required",
            "business_type.required" => "Business Type is required",

        ];
    }
}
