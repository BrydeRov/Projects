<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SaveProjectRequest extends FormRequest
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
            //

            'title' => ['required', Rule::unique('projects')->ignore($this->route('project'))],
            'url' => ['required', Rule::unique('projects')->ignore($this->route('project'))],
            'description' => 'required',
        ];        
    }

    public function messages()
        {
            return[

                'title.required' => 'El proyecto necesita un titulo',
                'description.required' => 'El proyecto necesita una descripción'

            ];
            
        }
}
