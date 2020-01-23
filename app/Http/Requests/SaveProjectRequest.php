<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false clase 29;
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
            'image' => 'image',
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ];
    }

    public function messages(){

        return [
            'title.required'=>'Debes proporcionar un titulo para el proyecto',
            'image.image'=>'La imagen deber ser en formato jpg, png, git, jpeg'
        ];
    }

}
