@extends('plantilla')
@section('principal')
@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('Guardado','Los datos fueron Guardados correctamente','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
    </div>
@endif

<br>

   
        

<div class="car-body container mt-10 col-md-6">
    <form class= "bg-light text-center" method="post" action="guardarEmpleados">
    
        <div class="text-center">
        <img class="p-3 mb-2 " src="tienda.jpg" >
        </div>
        <FONT FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Registro de Empleados</FONT>

        @csrf
        <div class="mb-3 p-3">
        <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;">Nombre del Usuario</label>
        <input type="text"  class="form-control " name="txtNombre" value="{{old ('txtNombre')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtNombre')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar CURP</label>
        <input type="text"  class="form-control " name="txtCURP" value="{{old ('txtCURP')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtCURP')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar Fecha de Nacimiento</label>
        <input type="text"  class="form-control " name="txtFecha" value="{{old ('txtFecha')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtFecha')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar rol</label>
        <input type="text"  class="form-control " name="txtRol" value="{{old ('txtRol')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtRol')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar no.celular</label>
        <input type="text"  class="form-control " name="txtCelular" value="{{old ('txtCelular')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtCelular')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar direccion</label>
        <input type="text"  class="form-control " name="txtDireccion" value="{{old ('txtDireccion')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtDireccion')}}</p>
        </div>


        <div class="p-3 mb-2">
        <button type="submit" class="btn btn btn-outline-success btn-lg text-center">Guardar</button>
        </div>
        
    
    </form>
</div>
</br>
@stop