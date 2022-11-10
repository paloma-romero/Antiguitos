@extends('plantilla')
@section('principal')


<div class="car-body container  mt-10 col-md-10">

    <form class= "bg-light text-center  mb-3 p-3">
        <b><div class="text-center mb-3 p-3">
        <FONT FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Empleados</FONT>
        </div>
        </b>
       
        
        <div class="btn-toolbar  text-center col-md-6 " role="toolbar" aria-label="Toolbar with button groups">
        <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;" >Usuario</label>
        <input type="text" id="disabledTextInput" class="form-control " value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">CURP</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Fecha Nacimiento</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly >
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;"> Rol</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">No.Celular</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Direccion</label>
        <input type="text" id="disabledTextInput" class="form-control"value="###" readonly >
        </div>
    
    </form>
    
    
    
   
    
    
</div>



@stop