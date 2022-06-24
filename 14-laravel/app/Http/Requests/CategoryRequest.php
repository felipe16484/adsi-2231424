<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        if($this->method() == 'PUT'){ // Se separa la forma de envío de la información para validaciones por edit o create
            return [
                'name'        => 'required|unique:categories,name,'.$this->id,
                'description' => 'required'               
            ];
        }else {
            return [
                'name'        => 'required|unique:categories',
                'description' => 'required',
                'image'       => 'required|image|max:2000'
            ];
        }        
    }

    /* Para personalizar el mensaje que va a salir debajo del input */
    public function messages() { // Modificación del mensaje de error para el required
        return [
            'name.required' => 'The ":attribute" field is is required please...'
        ];
    }

    public function attributes() { // Modificación para el nombre del campo
        return [
            'name' => 'Name'
        ];
    }
}
