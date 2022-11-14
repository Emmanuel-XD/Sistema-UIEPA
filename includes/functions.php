<?php
   




if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
            case 'insertar_categoria';
            insertar_categoria();
            break;

            case 'insertar_datos';
            insertar_datos();
            break;

            case 'editar_categoria';
            editar_categoria();
            break;

            case 'editar_datos';
            editar_datos();
            break;

            case 'editar_calculo';
            editar_calculo();
            break;
            case 'get_users'; 
            get_users();
            break;

        }

	}

    
function insertar_categoria(){

    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta="INSERT INTO categorias (nombre)
    VALUES ('$nombre' );" ;
    $resultado=mysqli_query($conexion, $consulta);

    if($resultado){
        echo "
        <script language='JavaScript'>
        alert('El registro fue realizado correctamente');
        location.assign('../views/insumos.php');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/insumos.php');
         </script>";
}

}

function insertar_datos(){

    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta="INSERT INTO insumo (fecha_entrada, cantidad, unidad, nombre, fecha_caducidad, marca,
    existencia, categoria)
    VALUES ('$fecha_entrada', '$cantidad', '$unidad', '$nombre', '$fecha_caducidad', '$marca', '$existencia', '$categoria' );" ;
    $resultado=mysqli_query($conexion, $consulta);

    if($resultado){
        echo "
        <script language='JavaScript'>
        alert('El registro fue realizado correctamente');
        location.assign('../views/insumos.php');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/insumos.php');
         </script>";
}

}


function editar_categoria() {
    require_once ("db.php");
    extract($_POST);
    $consulta="UPDATE categorias SET nombre = '$nombre' WHERE id = '$id' ";
    $resultado=mysqli_query($conexion, $consulta);

   if($resultado){
        echo "
        <script language='JavaScript'>
        alert('El registro fue actualizado correctamente');
        location.assign('../views/categorias.php');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/categorias.php');
         </script>";
}

}



function editar_datos() {
    require_once ("db.php");
    extract($_POST);
    $consulta="UPDATE insumo SET fecha_entrada = '$fecha_entrada', cantidad = '$cantidad',
    unidad = '$unidad', nombre = '$nombre', fecha_caducidad = '$fecha_caducidad', marca = '$marca',
    existencia = '$existencia', categoria = '$categoria' WHERE id = '$id' ";
    $resultado=mysqli_query($conexion, $consulta);

   if($resultado){
        echo "
        <script language='JavaScript'>
        alert('El registro fue actualizado correctamente');
        location.assign('../views/insumos.php');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/insumos.php');
         </script>";
}

}
function editar_calculo() {
    require_once ("db.php");
    extract($_POST);
    $consulta="UPDATE insumo SET  existencia = '$existencia' - '$entregado', entregado = '$entregado' WHERE id = '$id' ";
    $resultado=mysqli_query($conexion, $consulta);

   if($resultado){
        echo "
        <script language='JavaScript'>
        alert('La entrega fue completada ');
        location.assign('../views/insumos.php');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/insumo.php');
         </script>";
}

}
function get_users(){
    require_once("db.php");
    extract($_POST);
    $consulta = "SELECT * FROM usuarios";
    $resultado=mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado)>0)
    {    
        while ($dato = mysqli_fetch_assoc($resultado) ){
         $datos[] = $dato;
    }
echo json_encode($datos);
}
else {
echo json_encode('error');
}

}
