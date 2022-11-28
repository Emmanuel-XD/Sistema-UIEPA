
<!DOCTYPE html>
<html lang="en">
<?php require '../includes/db.php' ?>
<?php require '../includes/header.php' ?>

<body>
  
<div id= "content">
        <section>
        <div class="container mt-5">
<div class="row">
<div class="col-sm-12 mb-3">
<center><h1>Información de sesion actual</h1></center>
</div>
<div class="col-sm-12">
<div class="table-responsive">


<table class="table table-striped table-hover">
<thead>

<tr>
<th>Nombre</th>
<th>Usuario</th>
<th>Rol</th>
<th>registro</th>


</tr>

</thead>

<tbody>

<?php

$sql = "SELECT * FROM usuarios WHERE nombre ='$usuario'";
$usuarios = mysqli_query($conexion, $sql);
if($usuarios -> num_rows > 0){
foreach($usuarios as $key => $row ){


?>
<tr>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['rol_id']; ?></td>
<td><?php echo $row['fecha']; ?></td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="4">No existe registros</td>
    </tr>

    <?php
}?>
</tbody>

</table>
</div>
</div>
</div>
</div>
        </section>


        <section>
            <div class= "container">
                <div class= "row">
                    <div class= "col-lg-9">
            </div>
        </section>
    </div>
    
    <?php require '../includes/footer.php' ?>
    </body>

</html>