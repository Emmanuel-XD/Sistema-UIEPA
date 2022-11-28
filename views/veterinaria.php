<?php 
error_reporting(0);
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="../js/jquery.min.js"></script>

</head>
<?php include "../includes/header.php";?>
<?php
//if( $actualsesion == "Administrador"){
    ?> 


<body id="page-top">

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Veterinaria</h6>
                            <br>
                            <?php if($_SESSION["type"] == 1){ ?>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#datos">
				            <span class="glyphicon glyphicon-plus"></span> Agregar insumos <i class="fa fa-plus" aria-hidden="true"></i>   </a></button>

                            <a href="../includes/reportes/reporte_veterinaria.php?categoria=<?php echo'VETERINARIA'?>"  class="btn btn-outline-secondary">Imprimir <i class="fa fa-print" aria-hidden="true"></i></a>
                            <?php }
?>
                     
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Fecha Entrada</th>
                                            <th>Cantidad</th>
                                            <th>Unidad/Medida</th>
                                            <th>Reactivo/Insumo</th>
                                            <th>Fecha Caducidad</th>
                                            <th>Marca</th>
                                            <th>Existencia</th>
                                            <th>Categoria</th>
                                            <?php if($_SESSION["type"] == 1){ ?>
                                            <th>Acciones..</th>
                                            <th>Entregar</th>
                                            <?php }
?>
          
                                        </tr>
                                    </thead>
                                   

                                    </tbody>
                                    <?php
$categoria = $_GET['categoria'];
extract($_POST);
require_once ("../includes/db.php");   
$sql = "SELECT * FROM insumo WHERE categoria = '$categoria'";
$productos = mysqli_query($conexion, $sql);
if($productos -> num_rows > 0){
foreach($productos as $key => $fila ){
?>
<?php

if ($fila['cantidad'] <= $fila['existencia']) {
  $color = '#F78E8E';
  $clase = 'problema';
} else {
  $clase = 'correcto';
}
 
// ...

?>
<style>
      .problema{
        background-color: <?php echo $color?>;
        color: #000000;
    }
</style>

<tr>
<td <?php echo  'class="'.$fila['categoria'] .'"'; ?>><?php echo $fila['id']; ?></td>
<td><?php echo $fila['fecha_entrada']; ?></td>
<td <?php echo  'class="'.$clase .'"'; ?>><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['unidad']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['fecha_caducidad']; ?></td>
<td><?php echo $fila['marca']; ?></td>
<td><?php echo $fila['existencia']; ?></td>
<td><?php echo $fila['categoria'] ; ?></td>
<?php if($_SESSION["type"] == 1){ ?>
<td>
<a class="btn btn-warning" href="../includes/editar_vet.php?id=<?php echo $fila['id']?> ">
<i  class="fa fa-edit "></i> </a>
<a href="../includes/eliminar_vet.php?id=<?php echo $fila['id']?> " class="btn btn-danger btn-del" >
<i  class="fa fa-trash "></i></a></button>
</td>

<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#entrega<?php echo $fila['id']; ?>">
<i class="fa fa-archive" aria-hidden="true"></i>
                              </button>
</td>
<?php }
?>
          
</tr>
<?php  include "calculo_vet.php"; ?>


<?php }
}?>
   <style>
    
   </style>                             </table>

                                
   <script>
  $('.btn-del').on('click', function(e){
e.preventDefault();
const href = $(this).attr('href')

Swal.fire({
  title: 'Estas seguro de eliminar este registro?',
  text: "¡No podrás revertir esto!!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, eliminar!', 
  cancelButtonText: 'Cancelar!', 
}).then((result)=>{
    if(result.value){
        if (result.isConfirmed) {
    Swal.fire(
      'Eliminado!',
      'El registro fue eliminado.',
      'success'
    )
  }

        document.location.href= href;
    }   
})

    })
</script>
<script src="../package/dist/sweetalert2.all.js"></script>
<script src="../package/dist/sweetalert2.all.min.js"></script>
<script src="../package/jquery-3.6.0.min.js"></script>



                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php include "form_categoria.php";?>
            
            <?php include "../includes/footer.php";?>
            
            <?php include "form_vet.php";?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

 


</body>

</html>