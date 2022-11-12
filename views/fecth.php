
<?php
include "../includes/db.php";

if(isset($_POST['request'])){
    $request = $_POST['request'];

    $sql="SELECT * FROM insumo WHERE categoria = '$request'";
    $resultado=mysqli_query($conexion, $sql);
    $count = mysqli_num_rows($resultado);
}
?>

<script src="../js/jquery.min.js"></script>

<div class="card-body">
                        <div class="class">
                            <div class="table-responsive">
                  
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php
    if($count){
        ?>    
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
                            
<?php
} else{
    echo"No hay concidencias";
}
?>
                                    <tbody>

                                    <?php
    while($fila = mysqli_fetch_assoc($resultado)){
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
</tr>
<?php

    }
    ?>
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


<?php include "../includes/footer.php";?>