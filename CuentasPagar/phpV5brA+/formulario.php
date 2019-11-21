<?php
    $con = mysqli_connect('localhost','root','','cuentas_pagar');
    try{
    $monto = $_POST['input_monto'];
    $modo_pago = $_POST['select1'];
    $id_producto = $_POST['input_id_producto'];
    $id_factura = $_POST['input_id_factura'];
    $fecha_pago = $_POST['input_pago'];
    $fecha_recibo = $_POST['input_recibo'];
    $estado = $_POST['select2'];
    
    $intro = "INSERT INTO pedido_proveedor(monto,modo_pago,id_producto,id_factura,fecha_pago,fecha_recibo,estado)
        VALUES ($monto,'$modo_pago',$id_producto,$id_factura,'$fecha_pago','$fecha_recibo','$estado')";
    $enviar = mysqli_query($con,$intro);
    if(!$con){
      die("Connection failed: " . mysqli_connect_errno());
    }
    elseif($enviar){
    header("Location: Cuentas_pagar2V3.php");
    echo "Producto registrado";
  }
    }catch(Exception $e){
        echo 'Message' . $e->getMessage();
    }
?>