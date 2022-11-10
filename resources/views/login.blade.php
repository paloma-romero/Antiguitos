@extends('plantilla')
@section('principal')

@if(session()->has('Aceptacion'))
    {!! "<script> Swal.fire('Listo','Puedes acceder','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('Aceptacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
    </div>
@endif

<br>

    <div class="car-body container mt-10 col-md-5">
        <form class= "bg-light text-center" method="post" action="guardarlogin">
            <div class="text-center">
            <img class="p-3 mb-2 " src="tienda.jpg" >
            </div>
            @csrf
            <div class="mb-3 p-3">
            <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;">Nombre de usuario</label>
            <input type="text"  class="form-control " name="txtUsuario" value="{{old ('txtUsuario')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtUsuario')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Contraseña</label>
            <input type="text"  class="form-control " name="txtCon" value="{{old ('txtCon')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtCon')}}</p>
            </div>
            <div class="p-3 mb-2">
            <button type="submit" class="btn btn btn-outline-success btn-lg text-center">Acceder</button>
            </div>
        
        </form>
    </div>

</br>
@stop