@extends('plantilla')
@section('principal')


<div class="car-body container mt-10 col-md-10">
    <form class= "bg-light text-center  mb-3 p-3">
        <b><div class="text-center mb-3 p-3">
        <FONT FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Ticket de Venta</FONT>
        </div>
        </b>
       
        <img  src="tienda.jpg" align="left" class="mb-3 p-3" width="300" height="200">

        
        <div class="btn-toolbar col-md-6 " role="toolbar" aria-label="Toolbar with button groups">
        <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;" >Nombre Empleado</label>
        <input type="text" id="disabledTextInput" class="form-control " value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Nombre del Usuario</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" >
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Articulo</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly >
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;"> Cantidad</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>
        
        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Precio de Venta</label>
        <input type="text" id="disabledTextInput" class="form-control" value="###" readonly>

        <label for="disabledSelect" class="form-label fw-lighter " style="color:black;">Fecha de Venta</label>
        <input type="text" id="disabledTextInput" class="form-control"value="###" readonly >

        <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Forma de Pago</label>
        <input type="text" id="disabledTextInput" class="form-control"value="###" readonly >

        <div class="btn-toolbar mb-2 p-2">
        <label for="disabledSelect" class="form-label fw-lighter " style="color:black;">Total</label>
        </div>
        <div class="input-group mb-2 p-2">
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" value="00.00" readonly aria-label="Dollar amount (with dot and two decimal places)">
        </div>
        
            
        
        </div>
        <div class="btn-toolbar mb-3 " role="toolbar" aria-label="Toolbar with button groups">    
        
            <div class=" mb-3 p-3">
                <button type="button" class="btn btn-outline-success">Imprimir</button>
            </div>
            
            <div class="mb-3 p-3">
                <button type="button" class="btn btn-outline-danger">Cancelar</button>
            </div>
        </div>

    </form>
    
    
   
    

</div>



@stop