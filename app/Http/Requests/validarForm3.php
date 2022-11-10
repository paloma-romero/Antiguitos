<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarForm3 extends FormRequest
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
            'txtEmpresa'=>'required',
            'txtDireccion'=>'required',
            'txtPais'=>'required',
            'txtFijo'=>'required',
            'txtCelular'=>'required',
            'txtcorreo'=>'required',
            
        ];
    }
}
