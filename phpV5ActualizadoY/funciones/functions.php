<?php
	include "./conexion.php";
$sql = "SELECT * FROM pedido_proveedor";
$resultado = mysqli_query($con,$sql);
$operando = mysqli_query($con,$sql);
$s_p = mysqli_query($con,$sql);
$resultado2 = mysqli_query($con,'SELECT id_suplidor FROM suplidor');
$producto = mysqli_query($con, 'SELECT id_producto FROM producto');
$p_n = mysqli_query($con, 'SELECT * FROM producto');
$n_s = mysqli_query($con, 'SELECT nombre_suplidor FROM suplidor');

$data_array = array(
        'id' => 'id_proveedor',
        'id_producto' => 'id_producto'
);
?>