<?php include "header.php" ?>
<?php include "Conexion.php" ?>
        
<div class= "container-fluid p-4 ">
<div class = "row">

<div class="col-md-3">
  <?php  
  if(isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <?php session_unset(); } ?>
  
  <div class="card card-body">
<form action="registro.php" method="POST" onsubmit="return validar();">

<h3 class="text-center">Registro </h3>
<h4 class="text-center">Suplidor </h4>
<br>
  <div class="form-group">

<input  type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" autofocus required>
<br>
<input type="text" id="empresa" name="empresa" class="form-control" placeholder="Empresa" autofocus required>
<br>
<input type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion" autofocus required>
<br>
<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" autofocus required>
  </div>
  <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo" autofocus required>
<br>
<input type="text" id="rnc" name="rnc" class="form-control" placeholder="RNC" autofocus required>
<br>
<input type="submit" class = "btn btn-success btn-block" name="save_task" value= "Registrar">

</form>
</div>
</div>
<div class="col-md-9">

<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Empresa</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Correo</th>
      <th>RNC</th>
      <th>Acciones</th>
    
    </tr>
  </thead>
  <tbody>
      <?php 
       $sql = "SELECT * FROM suplidor1";
       $resultado = mysqli_query($con, $sql);
      while ($filas = mysqli_fetch_array($resultado) ){
      ?> 

    <tr>
      <th><?php echo $filas['id']?></th>
      <td><?php echo $filas['empresa']?></td>
      <td><?php echo $filas['Nombre_Suplidor']?></td>
      <td><?php echo $filas['direccion']?></td>
      <td><?php echo $filas['telefono']?></td>
      <td><?php echo $filas['correo']?></td>
      <td><?php echo $filas['RNC']?> </td>
      <td> 
      <a href="editar.php?id=<?php echo $filas['id']?>" class="btn btn-secondary">
      <i class="fas fa-user-edit"></i>
      </a>
      <a href="eliminar.php?id=<?php echo $filas['id']?>" class="btn btn-danger">
       <i class="far fa-trash-alt"></i>
      </a>
      </td>

      
    </tr>

      <?php } ?>
  </tbody>
</table>

</div>
  </div>
 
 
<?php include "footer.php" ?>


