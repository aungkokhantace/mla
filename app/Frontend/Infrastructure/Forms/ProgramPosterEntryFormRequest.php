<?php

namespace App\Frontend\Infrastructure\Forms;

use App\Http\Requests\Request;

class ProgramPosterEntryFormRequest extends Request
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
            "address" => "required",
            "email" => "required",
            "description" => "required",
            "title" => "required",
            "author" => "required",
        ];
    }
    public function messages(){
        return [
            "address.required" => "Address is required",
            "email.required" => "Email is required",
            "description.required" => "Description is required",
            "title.required" => "Title is required",
            "author.required" => "Author is required",

        ];
    }
}
