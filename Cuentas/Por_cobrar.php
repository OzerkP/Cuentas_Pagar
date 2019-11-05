<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Lista de pago</title>
</head>
<body>
<nav class="nav">
    <label class="sistema">Sistema Contable</label>
    
    <a class="nav-link inicio" href="#" > <img href=""> <i class="fas fa-warehouse"></i> Inicio</a>
    <a class="nav-link cliente" href="#"> <i class="fas fa-ethernet"></i> Cliente</a>
    <a class="nav-link proveedores" href="#"> <i class="fas fa-truck"></i> Proveedores</a>
    <a class="nav-link cobrar" href="#"> <i class="fas fa-pager"></i> Por cobrar</a>
    <a class="nav-link pagar" href="#"> <i class="fas fa-check-circle"></i> Por pagar</a>
    <a class="nav-link total" href="#"> <i class="fas fa-cash-register"></i> Totales</a>
    <a class="nav-link usuarios" href="#">Usuarios</a>
    <a class="nav-link salir" href="#"> <i class="fas fa-sign-out-alt"></i> Salir</a>
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>

    <div class="container">
        <div class="container lista1">
            <div class="row">
                <div class="col">
                    <label class="lista_pago">Listado de pago</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-9">
                <label for="show">Show</label>
                <label for="entrie">Entries</label>
            </div>
            <div class="col-lg-3">
                <div class="searchbar">
                    <input class="search_input" type="text" name="" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-2">Proveedor</div>
                <div class="col-2">Rif</div>
                <div class="col-2">Factura</div>
                <div class="col-2">Monto</div>
                <div class="col-2">Saldo</div>
                <div class="col-2">Acciones</div>
  </div>
</div>

        
    </div>


    
</body>
</html>