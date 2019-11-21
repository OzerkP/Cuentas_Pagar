<?php
	include "./conexion.php";
$sql = "Select * FROM pedido_proveedor";
$resultado = mysqli_query($con,$sql);
$data_array = array(
        'id' => 'id_proveedor'
);
?>