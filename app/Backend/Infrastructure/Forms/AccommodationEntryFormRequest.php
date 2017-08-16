<?php

namespace App\Backend\Infrastructure\Forms;

use App\Http\Requests\Request;

class AccommodationEntryFormRequest extends Request
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
            "stars" => "required",
            "description"  =>"required",
            "image"  => "required",
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Name is required",
            "stars.required" => "Star is required",
            "description.required" => "Description is required",
            "image.required" => "Select image",
        ];
    }
}
