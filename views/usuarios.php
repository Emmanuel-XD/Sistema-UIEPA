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
                <h2 class="subtitle">Bienvenido <?php echo $_SESSION['user']?> !</h2>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
                            <br>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#user">
				            <span class="glyphicon glyphicon-plus"></span> Agregar usuario  <i class="fa fa-user-plus"></i> </a></button>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Usuario</th>
                                            <th>Creacion de cuenta</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody id="user_table">
                                        <?php 
                                            require_once ("../includes/db.php");             
                                            $result=mysqli_query($conexion,"SELECT * FROM usuarios ");
                                            while ($fila = mysqli_fetch_assoc($result)):
                                        ?>
                                                    <tr>
            <td id="nombre"><?php echo $fila['nombre']; ?></td>
            <td id="correo"><?php echo $fila['username']; ?></td>
            <td id="fecha"><?php echo $fila['fecha']; ?></td>
            <td id="rol"><?php echo $fila['rol_id']; ?></td>
            <td>
            <a href="editUser.php?accion=edit_users&id=<?php echo $fila['id']?>" class="btn btn-warning" id="editForm">
            <i class="fa fa-edit "></i> </a>
            <a href="../includes/functions.php?accion=delete_users&id=<?php echo $fila['id'] ?> " class="btn btn-danger btn-del" id="deleteForm">
            <i  class="fa fa-trash "></i></a></button>
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
            <?php include "registro.php";?>
            
           
            


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

 


</body>
<script src="../js/register.js"></script>
<?php include "../includes/footer.php";?>
</html>