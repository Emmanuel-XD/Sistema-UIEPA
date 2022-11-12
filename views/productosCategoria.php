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
                            <h6 class="m-0 font-weight-bold text-primary">Categoria </h6>
                            <br>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#datos">
				            <span class="glyphicon glyphicon-plus"></span> Agregar datos   </a></button>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#categoria">
				            <span class="glyphicon glyphicon-plus"></span> Agregar categorias</a></button>
                                
                            <a href="../includes/reporte_cat.php?categoria=<?php echo'VETERINARIA'?>" class="btn btn-outline-danger">
                            <i class="fa fa-file" aria-hidden="true"></i>  Generar Reporte PDF</a>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Fecha Entrada</th>
                                            <th>Cantidad</th>
                                            <th>Unidad/Medida</th>
                                            <th>Reactivo/Insumo</th>
                                            <th>Fecha Caducidad</th>
                                            <th>Marca</th>
                                            <th>Existencia</th>
                                            <th>Categoria</th>
                                            <th>Acciones</th>
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

<tr>
<td><?php echo $fila['fecha_entrada']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['unidad']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['fecha_caducidad']; ?></td>
<td><?php echo $fila['marca']; ?></td>
<td><?php echo $fila['existencia']; ?></td>
<td><?php echo $fila['categoria']; ?></td>

<td>
<a class="btn btn-warning" href="../includes/editar_insumo.php?id=<?php echo $fila['id']?> ">
<i  class="fa fa-edit "></i> </a>
<a href="../includes/eliminar_user.php?id=<?php echo $fila['id']?> " class="btn btn-danger btn-del" >
<i  class="fa fa-trash "></i></a></button>
</td>
</tr>


<?php }
}?>
                                </table>

                                
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
            
            <?php include "form_datos.php";?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

 


</body>

</html>