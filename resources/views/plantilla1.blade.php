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

<body class="p-3 mb-2 bg-light  text-white" > 
    
    
    <!--Barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary p-3 mb-4">
    
    <div class="container-fluid ">
        <a clas="{{request()->routeIs('NHome') ? 'text-dark':''}}" href="/" ><img src="tienda.jpg" ></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            
            <li class="nav-item">
            <a class="nav-link text-white {{request()->routeIs('NLogin') ? 'text-dark':''}}"" href="/login">Login</a>
            </li>
            
            
        </ul>
        </div>
        
    </div>
    </nav>

    @yield('principal')

    <!--div es una caja, puede tener estilo como el nav-->
    <div class="mx-auto p-5 text-center text-dark"   >Tienda Antiguitos {{date('Y')}}</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<style>

body {
  height: 500px;
  background-image: url("Vinil.jpg");
  background-repeat:no-repeat;
  background-position-x:-300;
  background-position-y:-1;
  background-size: 60rem;
}
</style>
</html>
