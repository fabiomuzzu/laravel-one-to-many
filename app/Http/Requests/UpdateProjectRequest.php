<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'repository_link' => 'required',
            'date_start' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'The project name is required',
            'repository_link.required' => 'The repository link is required',
            'date_start.required' => 'The start date is required',
        ];
    }
}
