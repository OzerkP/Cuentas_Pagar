<?php
	include "./conexion.php";
$sql = "SELECT * FROM pedido_proveedor";
$resultado = mysqli_query($con,$sql);
$operando = mysqli_query($con,$sql);
$data_array = array(
        'id' => 'id_proveedor',
);
?>