<?php

namespace App\Frontend\Infrastructure\Forms;

use App\Http\Requests\Request;

class RegistrationEntryFormRequest extends Request
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
            "first_name"             => "required",
            "middle_name"            => "required",
            "last_name"              => "required",
            "organization"           => "required",
            "email"                  => "required",
            "country"                => "required",
            "ph_no"                  => "required",
            "registration_category"  => "required",
            "payment_type"           => "required",
        ];
    }
    public function messages(){
        return [
            "first_name.required"                 => "First Name is required",
            "middle_name.required"                => "Middle Name is required",
            "last_name.required"                    => "Last Name is required",
            "organization.required"               => "Organization is required",
            "email.required"                      => "Email is required",
            "country.required"                    => "Country is required",
            "ph_no.required"                      => "Phone is required",
            "registration_category.required"      => "Registration category is required",
            "payment_type.required"               => "Payment type is required",
        ];
    }
}
