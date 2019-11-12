<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body>    
  <?php
  $con = mysqli_connect("localhost","root","","cuentas_pagar");
  ?>
<header>

</header>

<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Empresa</th>
        <th scope="col">Suplidor</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Producto/Servicio</th>
        <th scope="col">Cantidad</th>
       <th scope="col">Fecha de recibo</th>
        <th scope="col">Fecha de pago</th>
        <th scope="col">Modo pago</th>
        <th scope="col">Monto</th>
        <th scope="col">Estado</th>
        <th scope="col">Factura</th>
        


      </tr>
    </thead>
    <?php $sql = "SELECT * FROM suplidor 
    
    
    
    
    
    
    ";







    $resultado = mysqli_query($con,$sql);
    while($filas = mysqli_fetch_array($resultado)){
     ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo $filas['id_suplidor']?></th>
        <td><?php echo $filas['empresa']?></td>
        <td><?php echo $filas['nombre_suplidor']?></td>
        <td><?php echo $filas['direccion']?></td>
        <td><?php echo $filas['telefono']?></td>
        <td><?php echo $filas['correo']?></td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>

    <?php } ?>
    
    </tbody>
  </table>

<footer>

</footer>
<script src="js/jquery.js"></script>
<script src="/Jeremy/js/bootstrap.js"></script>
</body>
</html>