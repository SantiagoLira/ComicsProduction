<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Comics_A extends FormRequest
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
      
'Proveedor'=>'required',
'Edicion'=>'required',
'Cantidad'=>'required|int',
'Precio_compra'=>'required|int',
'Fecha'=>'required',
'Nombre'=>'required',
'Compañia'=>'required',
        ];
    }
}
