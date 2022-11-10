<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Antiguitos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="p-3 mb-2 bg-secondary  text-white"> 

    
    <!--Barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 mb-4">
    
        <div class="container-fluid  ">
            <a clas="{{request()->routeIs('NHome') ? 'text-dark':''}}" href="/" ><img src="tienda.jpg" ></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                        <li class="nav-item d-inline p-1">
                        <a class="nav-link {{request()->routeIs('NLogin') ? 'text-dark':''}}"" href="/login">Login</a>
                        </li>
                        
                        <li class="nav-item d-inline p-1">
                        <a class="nav-link {{request()->routeIs('NVentas') ? 'text-dark':''}}"" href="/ventas">Venta</a>
                        </li>

                        <li class="nav-item d-inline p-1">
                        <a class="nav-link {{request()->routeIs('NTickets') ? 'text-dark':''}}"" href="/tickets">Tickets</a>
                        </li>
                    
                    <div class="container ">
                        

                        <div class="input-group d-inline p-2 ">
                            <button type="button" class="btn btn-outline-secondary">Consulta</button>
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link {{request()->routeIs('NConsulta Disco') ? 'text-dark':''}}"" href="/consulta">Consulta Disco</a></li>
                                <li><a class="nav-link {{request()->routeIs('NConsultaArticulo') ? 'text-dark':''}}"" href="/consultaArticulo">Consulta Articulo</a></li>
                                <li><a class="nav-link {{request()->routeIs('NConsultaProvedores') ? 'text-dark':''}}"" href="/consultaProvedores">Consulta Proveedores</a></li>
                                <li><a class="nav-link {{request()->routeIs('NConsultaEmpleados') ? 'text-dark':''}}"" href="/consultaEmpleados">Consulta Empleados</a></li>
                            </ul>
                        </div>
                        

                        <div class="input-group d-inline p-2">
                            <button type="button" class="btn btn-outline-secondary">Registro</button>
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link {{request()->routeIs('NRegistro') ? 'text-dark':''}}"" href="/registro">Registro de Disco</a></li>
                                <li><a class="nav-link {{request()->routeIs('NRegistroArticulo') ? 'text-dark':''}}"" href="/registroArticulo">Registro de Articulo</a></li>
                                <li><a class="nav-link {{request()->routeIs('NRegistroProvedores') ? 'text-dark':''}}"" href="/registroProvedores">Registro de Proveedor</a></li>
                                <li><a class="nav-link {{request()->routeIs('NRegistroEmpleados') ? 'text-dark':''}}"" href="/registroEmpleados">Registro de Empleados</a></li>
                            </ul>
                        </div>
                        
                        <div class="input-group d-inline p-2">
                            <button type="button" class="btn btn-outline-secondary">Tablas</button>
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link {{request()->routeIs('NTabla') ? 'text-dark':''}}"" href="/Tabla">Tabla de Disco</a></li>
                                <li><a class="nav-link {{request()->routeIs('NTablaArticulo') ? 'text-dark':''}}"" href="/tablaArticulo">Tabla de Articulo</a></li>
                                <li><a class="nav-link {{request()->routeIs('NTablaProvedores') ? 'text-dark':''}}"" href="/tablaProvedores">Tablas de Proveedores</a></li>
                                <li><a class="nav-link {{request()->routeIs('NTablaEmpleados') ? 'text-dark':''}}"" href="/tablaEmpleados">Tabla de Empleados</a></li>
                            </ul>
                        </div>

                    </div>
                    
                    
                </ul>
            </div>
            
        </div>
    </nav>

    @yield('principal')

    <!--div es una caja, puede tener estilo como el nav-->
    <div class="mx-auto p-5 text-center"  >Tienda Antiguitos {{date('Y')}}</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>