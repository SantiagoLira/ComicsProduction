<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Proveedor_A extends FormRequest
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
      

'Correo'=>'required | email',
'Pais'=>'required',
'Celular'=>'required|int',
'Direccion'=>'required',
'Empresa'=>'required',
'Contacto'=>'required',
        ];
    }
}
