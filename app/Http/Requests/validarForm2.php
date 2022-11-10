<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarForm2 extends FormRequest
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
            
            'txtTipo'=>'required',
            'txtinterprete'=>'required',
            'txtCanciones'=>'required',
            'txtDescripcion'=>'required',
            'txtFecha'=>'required',
            'txtCanciones'=>'required',
            'txtCant'=>'required',
            'txtPrecio'=>'required'
        ];
    }
}
