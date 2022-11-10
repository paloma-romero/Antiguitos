@extends('plantilla')
@section('principal')


<div class="car-body container mt-10 col-md-10">
    <form class="bg-light mb-3 p-3">
    <b><div class="text-center mb-3 p-3">
    <FONT FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Ventas</FONT>
    </div>
    </b>
    
    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group" role="group" aria-label="First group">
        <FONT FACE="courier new" SIZE=5 COLOR="black" class="text-center mb-3 p-3">Nombre del Vendedor</FONT>
        </div>
    
        <div class="input-group mb-3 p-3">
            <div class="input-group-text" id="btnGroupAddon2">Buscador</div>
                <input type="text" class="form-control" placeholder="Buscame" aria-label="Input group example" aria-describedby="btnGroupAddon2">
        </div>
    </div>

    <table class="table table-secondary">
    <thead>
        <tr>
        <th scope="col">Imagen</th>
        <th scope="col">Codigos</th>
        <th scope="col">Articulos</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Stock</th>
        <th scope="col">Precio</th>
        
        </tr>
    </thead>
    <tbody>
        <tr class="table-primary">
        <th scope="row">#</th>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        </tr>
        <tr>
        <th scope="row">#</th>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        </tr>
        <tr class=" table-primary">
        <th scope="row">#</th>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        </tr>
    </tbody>
    </table>

    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">    
        
        <div class=" mb-3 p-3">
            <button type="button" class="btn btn-outline-success">Realizar venta</button>
        </div>
        
        <div class="mb-3 p-3">
            <button type="button" class="btn btn-outline-danger">Cancelar</button>
        </div>
    </div>
   
    
</form>
</div>



@stop