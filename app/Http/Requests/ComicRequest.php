<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title'=> 'required|max:50|min:5',
            'type' => 'required|max:50|min:4',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'il campo Nome è obbligatorio',
            'title.max' => 'Coglione max 50 lettere',
            'title.min' => 'Coglione più di 5 lettere',
            'type.required' => 'il campo Tipo è obbligatorio',
            'type.max' => 'Coglione max 50 lettere',
            'type.min' => 'Coglione più di 4 lettere',
        ];
    }
}
