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
  $con = mysqli_connect("localhost", "root", "", "cuentas_pagar");
  ?>
  <header>
  <ul class="nav nav-tabs">
    
    <li class="nav-item">
      <a class="nav-link" href="../Anthony/index.php">Suplidores</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../phpV5F/Cuentas_pagar2V3.php">Agregar pedidos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../CxP%20jer/index.php">Cuentas Por Pagar</a>
    </li>
    
  </ul>
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
    <?php $sql = 
          "select s.id_suplidor,s.empresa,s.nombre_suplidor,s.direccion,s.telefono,s.correo,p.producto_nombre,p.cantidad,pedido.fecha_recibo,pedido.fecha_pago,pedido.modo_pago,pedido.monto,pedido.estado,pedido.id_factura
          from cxp 
          inner join pedido_proveedor as pedido
          on pedido.id_pedido = cxp.id_pedido
          inner join suplidor as s
          on s.id_suplidor = cxp.id_suplidor
          inner join producto as p
          on p.id_producto = pedido.id_producto
          group by p.id_producto";







    $resultado = mysqli_query($con, $sql);
    while ($filas = mysqli_fetch_array($resultado)) {
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $filas['id_suplidor'] ?></th>
          <td><?php echo $filas['empresa'] ?></td>
          <td><?php echo $filas['nombre_suplidor'] ?></td>
          <td><?php echo $filas['direccion'] ?></td>
          <td><?php echo $filas['telefono'] ?></td>
          <td><?php echo $filas['correo'] ?></td>
          <td><?php echo $filas['producto_nombre'] ?></td>
          <td><?php echo $filas['cantidad'] ?></td>
          <td><?php echo $filas['fecha_recibo'] ?></td>
          <td><?php echo $filas['fecha_pago'] ?></td>
          <td><?php echo $filas['modo_pago'] ?></td>
          <td><?php echo $filas['monto'] ?></td>
          <td><?php echo $filas['estado'] ?></td>
          <td><?php echo $filas['id_factura'] ?></td>

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