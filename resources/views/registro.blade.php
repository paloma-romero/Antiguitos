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
        <form class= "bg-light text-center" method="post" action="guardar">
        
            <div class="text-center">
            <img class="p-3 mb-2 " src="tienda.jpg" >
            </div>
            <FONT FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Registro de Disco</FONT>

            @csrf
            <div class="mb-3 p-3">
            <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;">Nombre del album</label>
            <input type="text"  class="form-control " name="txtAlbum" value="{{old ('txtAlbum')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtAlbum')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar interprete</label>
            <input type="text"  class="form-control " name="txtinterprete" value="{{old ('txtinterprete')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtinterprete')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar disquera</label>
            <input type="text"  class="form-control " name="txtDisquera" value="{{old ('txtDisquera')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtDisquera')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar año de lanzamiento</label>
            <input type="text"  class="form-control " name="txtLanzamiento" value="{{old ('txtLanzamiento')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtLanzamiento')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar no. de canciones</label>
            <input type="text"  class="form-control " name="txtCanciones" value="{{old ('txtCanciones')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtCanciones')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar cantidades</label>
            <input type="text"  class="form-control " name="txtCant" value="{{old ('txtCant')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtCant')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar precio de compra</label>
            <input type="text"  class="form-control " name="txtPrecioC" value="{{old ('txtPrecioC')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtPrecioC')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Ingresar precio de venta</label>
            <input type="text"  class="form-control " name="txtPrecio" value="{{old ('txtPrecio')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtPrecio')}}</p>
            </div>


            <div class="p-3 mb-2">
            <button type="submit" class="btn btn btn-outline-success btn-lg text-center">Guardar</button>
            </div>
            
        
        </form>
    </div>
</br>
@stop