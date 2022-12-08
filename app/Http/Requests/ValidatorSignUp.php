<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatorSignUp extends FormRequest
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
            'txtNameTrabajador'=> 'required',
            'txtApellidoTrabajador'=>'required ',
            'txtEmailTrabajador'=>'required | email ',
            'txtUserTrabajador'=>'required ',
            'txtPasswordTrabajador'=>'required ',
        ];
    }
}
