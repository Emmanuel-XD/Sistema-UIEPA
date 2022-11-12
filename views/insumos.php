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
                            <h6 class="m-0 font-weight-bold text-primary">Datos Generales</h6>
                            <br>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#datos">
				            <span class="glyphicon glyphicon-plus"></span> Agregar datos   </a></button>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoria">
				            <span class="glyphicon glyphicon-plus"></span> Agregar categorias</a></button>
                                
                            <a href="../includes/reporte.php" class="btn btn-outline-danger">
                            <i class="fa fa-file" aria-hidden="true"></i>  Generar Reporte PDF</a>

                            <label for="cat" class="form-label"></label>
                            <select name="select" id="select" class="control" required>
                            <option value="0" >--Ver por categoria--</option>
 
                                  <?php

                            include ("../includes/db.php");
                            //Codigo para mostrar categorias desde otra tabla
                            $sql="SELECT * FROM categorias ";
                            $resultado=mysqli_query($conexion, $sql);
                            while($consulta=mysqli_fetch_array($resultado)){
                            echo '<option value="'.$consulta['nombre'].'">'.$consulta['nombre'].'</option>';
                               }

                                   ?>
                              </select>
                        </div>
                        <style>

                        </style>
                        
                        <div class="card-body">
                        <div class="class">
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
                                            <th>Acciones...</th>
                                            <th>Entregar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
		
                                    <?php

require_once ("../includes/db.php");             
$result=mysqli_query($conexion,"SELECT * FROM insumo ");
while ($fila = mysqli_fetch_assoc($result)):
    
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
<a href="../includes/eliminar_insumo.php?id=<?php echo $fila['id']?> " class="btn btn-danger btn-del" >
<i  class="fa fa-trash "></i></a></button>
</td>
<td>
<input type="number" class="cuadro" name="" id="">
</td>
</tr>


<?php endwhile;?>
                                    </tbody>
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

    </div>


    <script type="text/javascript">
    $(document).ready(function(){
        $("#select").on('change', function(){
            var value = $(this).val();
            //alert(value);
            $.ajax({
                url:'fecth.php',
                type:'POST',
                data:'request=' + value,
                beforeSend:function(){
                    $(".class").html("<span>Working..</span>");

                },

                success:function(data){
                    $(".class").html(data);
                }
            }); 
        });
    });
</script>

</body>

</html>