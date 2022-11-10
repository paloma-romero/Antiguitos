@extends('plantilla')
@section('principal')


<div class="car-body container mt-10 col-md-10">

    <form class= "bg-light text-center  mb-3 p-3">
        <b><div class="text-center mb-3 p-3">
        <FONT FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Disco</FONT>
        </div>
        </b>
        
        <img  src="disco1.jpeg" align="left" class="mb-3 p-3" width="300" height="300">
       
        
        <div class="btn-toolbar col-md-6 " role="toolbar" aria-label="Toolbar with button groups">
        <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;" >Album</label>
        <input type="text" id="disabledTextInput" class="form-control " value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Interprete</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Disquera</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly >
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Año de lanzamiento</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">No. de canciones</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Cantidades</label>
        <input type="text" id="disabledTextInput" class="form-control"value="###" readonly >
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Precio de compra</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly >
       
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Precio de venta</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly >
        </div>
    
    </form>
    
    
    
   
    
    
</div>



@stop