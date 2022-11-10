<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarForm4 extends FormRequest
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
            'txtNombre'=>'required',
            'txtCURP'=>'required',
            'txtFecha'=>'required',
            'txtRol'=>'required',
            'txtCelular'=>'required',
            'txtDireccion'=>'required',
            
        ];
    }
}
