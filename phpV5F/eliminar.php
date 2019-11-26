<?php 
	include 'conexion.php';
	if(isset($_GET['id_pedido']));
		$id_ped = $_GET['$id_pedido'];
		$query = "DELETE FROM pedido_proveedor where id_pedido = $id_ped";
		$result = mysqli_query($con,$query);
	if(!result){
		die("fallos");
	}

	$_SESSION['message'] = 'Factura eliminada con exito';
	$_SESSION['message_type'] = 'success';
	header("Location: Cuentas_pagar2V3.php");


?>