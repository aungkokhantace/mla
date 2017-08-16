<?php

namespace App\Backend\Infrastructure\Forms;

use App\Http\Requests\Request;

class PageEntryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
<<<<<<< HEAD
        return true;
=======
        return false;
>>>>>>> heinkhantlin
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"              =>"required",
            "url"               =>"required|unique:pages",
            "title"             =>"required",
            "page_menu_order"   =>"required",
            "events_id"         =>"required",
            "templates_id"      =>"required",
        ];
    }
<<<<<<< HEAD

=======
>>>>>>> heinkhantlin
    public function messages(){
        return [
            "name.required"             => "Page Name is required",
            "url.required"              => "Page URL is required",
            "url.unique"                => "Page URL is already occupied",
            "title.required"            => "Page Title is required",
            "page_menu_order.required"  => "Page Menu Order is required",
            "events_id.required"        => "Event is required",
            "templates_id.required"     => "Template is required",
        ];
    }
}
