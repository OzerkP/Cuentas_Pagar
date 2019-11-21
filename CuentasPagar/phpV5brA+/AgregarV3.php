<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="estilos.css" >
    <link rel="stylesheet" href="../css/bootstrap.css">
    
    <title>Agregar Factura</title>
    

</head>
<body>
<?php include('header.php'); ?>
	
<div class="container w-100 bg-ligth">
        <div class="row justify-content-center">
          
              <form action="formulario.php" method="POST" onsubmit=" return validar();">


                <div class="col"> <label for="monto">Monto</label>
                <input class="form-control"  id="input_monto" name="input_monto" type="text" size="40"  placeholder="Monto">
                </div>

                <div class="col"> <label for="modo">Modo de Pago</label> 
					         <select class="form-control" name="select1" id="select1">
                      <option value="tarjeta">&ltTarjeta de Credito&gt</option>
                      <option value="cheque">&ltCheque&gt</option>
                      <option value="efectivo">&ltEfectivo&gt</option>
  				         </select>
                </div>

                <div class="col"> <label for="estado">Estado</label>
                  <select class="form-control" id="select2" name="select2">
                    <option value="pago">Pagado</option>
                    <option value="pendiente">Pendiente</option>
                    <option value="atrazado">Atrazado</option>
                  </select>
                </div>

                  <div class="col"> <label for="id_productor">Id del producto</label>
                    <input  type="text" class="form-control" name="input_id_producto" id="input_id_producto" size="40" placeholder="Id del Producto" required> 
                  </div>

                  <div class="col"> <label for="id_factura">Id de la factura</label>
                    <input class="form-control" name="input_id_factura" id="input_id_factura" type="text" size="40" placeholder="Id de la factura"> 
                  </div>
                  <div class="col"> <label for="pago">Fecha de pago</label>
                    <input class="form-control" name="input_pago" id="input_pago" type="text" size="40" placeholder="Fecha de pago"> 
                  </div>
                  <div class="col"> <label for="recibo">Fecha de entrega</label>
                      <input class="form-control" name="input_recibo" id="input_recibo" type="text" size="40" placeholder="Fecha de recibo"> 
                  </div>
                  <br>
                  <div class="col botones">
                    <button type="submit" name="enviar" class="btn btn-primary">Registrar </button>    
                    <a href="Cuentas_pagar2V3.php" name="volver" class="btn btn-dark" role="button">Volver</a>
			            </div>
                </form>
              </div>
                
</div>
<script src="./js/bootstrap.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="validar.js"><script>
</body>
</html>