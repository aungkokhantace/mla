<?php

namespace App\Frontend\Infrastructure\Forms;

use App\Http\Requests\Request;

class ProgramCallEntryFormRequest extends Request
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
            "title" => "required",
            "first_author" => "required",
            "email" => "required",
            "address" => "required",
            "second_author" => "required",
            "third_author" => "required",
            "abstract" => "required",
          "paper_file" => "required",
            // "paper_file" => "mimes:docx,pdf",
        ];
    }
    public function messages(){
        return [
            "title.required" => "1st Author Affiliation is required",
            "first_author.required" => "1st Author Affiliation is required",
            "email.required" => "Email is required",
            "address.required" => "Address is required",
            "second_author.required" => "2nd Author is required",
            "third_author.required" => "3rd Author is required",
            "abstract.required" => "Abstract is required",
            "paper_file.required" => "Paper file is required",
            "paper_file.file" => "This must be a successfully uploaded file",
            "paper_file.mimes" => "Please upload only docx or pdf file type",
            "paper_file.size" => "Maximum file upload size is 5MB",
        ];
    }
}
