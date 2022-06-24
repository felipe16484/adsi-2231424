<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                'fullname' => 'required',
                'email' => 'required|email|unique:users,email,'.$this->id,
                'phone' => 'required|numeric',
                'birthday' => 'required|date',
                'gender' => 'required',
                'address' => 'required',
                'role' => 'required'
            ];
        }else {
            return [
                'fullname'  => 'required',
                'email'     => 'required|email|unique:users',
                'phone'     => 'required|numeric',
                'birthday'  => 'required|date',
                'gender'    => 'required',
                'address'   => 'required',
                'photo'     => 'required|image|max:2000',
                'role'      => 'required',
                'password'  => 'required|min:4|confirmed'
            ];
        }        
    }

    /* Para personalizar el mensaje que va a salir debajo del input */
    public function messages() { // Modificación del mensaje de error para el required
        return [
            'fullname.required' => 'The ":attribute" field is is required please...',
            'password.min'      => '4 characters min'
        ];
    }

    public function attributes() { // Modificación para el nombre del campo
        return [
            'fullname' => 'Fullname'
        ];
    }
}
