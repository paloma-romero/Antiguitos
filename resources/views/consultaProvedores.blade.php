@extends('plantilla')
@section('principal')


<div class="car-body container mt-10 col-md-10">

    <form class= "bg-light text-center mb-3 p-3">
        <b><div class="text-center mb-3 p-3">
        <FONT FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Proveedor</FONT>
        </div>
        </b>
        
        <img  src="empresa.jpg" align="left" class="mb-3 p-3" width="400" height="300">
       
        
        <div class="btn-toolbar col-md-6 " role="toolbar" aria-label="Toolbar with button groups">
        <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;" >Empresa</label>
        <input type="text" id="disabledTextInput" class="form-control " value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Direccion</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Pais</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly >
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">No. fijo</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">No.Celular</label>
        <input type="text" id="disabledTextInput" class="form-control"value="###" readonly >
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Correo</label>
        <input type="text"  id="disabledTextInput" class="form-control" value="###" readonly >
        </div>
    
    </form>
    
    
    
   
    
    
</div>



@stop