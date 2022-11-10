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
    <form class= "bg-light text-center" method="post" action="guardarProvedores">
    
        <div class="text-center">
        <img class="p-3 mb-2 " src="tienda.jpg" >
        </div>
        <FONT FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Registro de Proveedores</FONT>

        @csrf
        
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar empresa</label>
        <input type="text"  class="form-control " name="txtEmpresa" value="{{old ('txtEmpresa')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtEmpresa')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar direccion</label>
        <input type="text"  class="form-control " name="txtDireccion" value="{{old ('txtDireccion')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtDireccion')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar pais</label>
        <input type="text"  class="form-control " name="txtPais" value="{{old ('txtPais')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtPais')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar no. fijo</label>
        <input type="text"  class="form-control " name="txtFijo" value="{{old ('txtFijo')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtFijo')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar no. celular</label>
        <input type="text"  class="form-control " name="txtCelular" value="{{old ('txtCelular')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtCelular')}}</p>
        </div>
        <div class="mb-3 p-3 ">
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar correo</label>
        <input type="text"  class="form-control " name="txtcorreo" value="{{old ('txtcorreo')}}" >
        <p class="fw-bold text-danger">{{$errors->first('txtcorreo')}}</p>
        </div>
        


        <div class="p-3 mb-2">
        <button type="submit" class="btn btn btn-outline-success btn-lg text-center">Guardar</button>
        </div>
        
    
    </form>
</div>
</br>
@stop