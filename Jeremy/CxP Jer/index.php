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
  $con = mysqli_connect("localhost","root","","cxp");
  ?>
<header>

</header>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Suplidor</th>
        <th scope="col">Pedido</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Costo</th>
        <th scope="col">Monto</th>
        <th scope="col">Fecha limite</th>
        <th scope="col">Factura</th>
      </tr>
    </thead>
    <?php $sql = "SELECT * FROM suplidor";
    $resultado = mysqli_query($con,$sql);
    while($filas = mysqli_fetch_array($resultado)){
     ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo $filas['id_suplidor']?></th>
        <td><?php echo $filas['nombre_suplidor']?></td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>the Bird</td>
        <td>@twitter</td>
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