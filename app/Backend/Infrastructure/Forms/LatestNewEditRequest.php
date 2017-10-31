<?php

namespace App\Backend\Infrastructure\Forms;

use App\Http\Requests\Request;

class LatestNewEditRequest extends Request
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
            "name"  =>"required",
            "description"  =>"required",
            "news_date"  =>"required",
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Name is required",
            "description.required" => "Description is required",
            "news_date.required" => "Date of News is required",
        ];
    }
}
