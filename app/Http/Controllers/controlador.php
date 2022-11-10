<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarForm1;
use App\Http\Requests\validarForm2;
use App\Http\Requests\validarForm3;
use App\Http\Requests\validarForm4;
use App\Http\Requests\validarlogin;


class controlador extends Controller
{
    function fHome(){
        return view('home');
    }

    function fLogin(){
        return view('login');
    }
    function fVentas(){
        return view('ventas');
    }
    function fTickets(){
        return view('tickets');
    }


    function fConsulta(){
        return view('consulta');
    }
    function fRegistro(){
        return view('registro');
    }
    function fTabla(){
        return view('Tabla');
    }

    function fConsultaArticulo(){
        return view('consultaArticulo');
    }
    function fRegistroArticulo(){
        return view('registroArticulo');
    }
    function fTablaArticulo(){
        return view('tablaArticulo');
    }

    function fConsultaProvedores(){
        return view('consultaProvedores');
    }
    function fRegistroProvedores(){
        return view('registroProvedores');
    }
    function fTablaProvedores(){
        return view('tablaProvedores');
    }

    function fConsultaEmpleados(){
        return view('consultaEmpleados');
    }
    function fRegistroEmpleados(){
        return view('registroEmpleados');
    }
    function fTablaEmpleados(){
        return view('tablaEmpleados');
    }


    public function procesar(validarForm1 $req){
        return redirect('registro')->with('confirmacion','Datos recibidos');
    }
    public function procesarLogin(validarlogin $req){
        return redirect('login')->with('Aceptacion','Datos recibidos');
    }
    public function procesarArticulo(validarForm2 $req){
        return redirect('registroArticulo')->with('confirmacion','Datos recibidos');
    }
    public function procesarProvedores(validarForm3 $req){
        return redirect('registroProvedores')->with('confirmacion','Datos recibidos');
    }
    public function procesarEmpleados(validarForm4 $req){
        return redirect('registroEmpleados')->with('confirmacion','Datos recibidos');
    }
}
