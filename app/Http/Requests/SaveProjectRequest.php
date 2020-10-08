<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
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
        return Gate::allows('create-projects');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'url' => [
                'required',
                Rule::unique('projects')->ignore($this->route('project'))
            ],
            'category_id' => [
                'required',
                'exists:categories,id'
            ],
            'image' => [
                $this->route('project') ? 'nullable' : 'required',
                'mimes:jpeg,png',
                // 'dimensions:width=600,height=400'
            ], // image => jpeg, jpg, png, bmp, gif, svg o webp
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El proyecto necesita un título'
        ];
    }
}
