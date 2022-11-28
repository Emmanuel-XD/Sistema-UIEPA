<?php
if (isset($_GET['accion'])){
    switch ($_GET['accion']){
        case 'delete_users';
        delete_user();
        break;
    }
}
if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
            case 'insertar_categoria';
            insertar_categoria();
            break;

            case 'insertar_datos';
            insertar_datos();
            break;

            case 'insertar_enfer';
            insertar_enfer();
            break;
            case 'insertar_gastro';
            insertar_gastro();
            break;
            case 'insertar_agro';
            insertar_agro();
            break;
            case 'insertar_bio';
            insertar_bio();
            break;
            case 'insertar_vet';
            insertar_vet();
            break;

            case 'editar_categoria';
            editar_categoria();
            break;

            case 'editar_datos';
            editar_datos();
            break;

            case 'editar_enfer';
            editar_enfer();
            break;

            case 'editar_gastro';
            editar_gastro();
            break;

            case 'editar_agro';
            editar_agro();
            break;

            case 'editar_bio';
            editar_bio();
            break;

            case 'editar_vet';
            editar_vet();
            break;

            case 'editar_datos_usuario';
            editar_datos_usuario();
            break;
            case 'editar_calculo';
            editar_calculo();
            break;
            case 'calculo_enfer';
            calculo_enfer();
            break;
            case 'calculo_gastro';
            calculo_gastro();
            break;
            case 'calculo_agro';
            calculo_agro();
            break;
            case 'calculo_bio';
            calculo_bio();
            break;
            case 'calculo_vet';
            calculo_vet();
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

function insertar_enfer(){

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
        location.assign('../views/enfermeria.php?categoria=ENFERMERIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/enfermeria.php?categoria=ENFERMERIA');
         </script>";
    }

}

function insertar_gastro(){

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
        location.assign('../views/gastronomia.php?categoria=GASTRONOMIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/gastronomia.php?categoria=GASTRONOMIA');
         </script>";
    }

}

function insertar_agro(){

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
        location.assign('../views/agroindustrial.php?categoria=AGROINDUSTRIAL');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/agroindustrial.php?categoria=AGROINDUSTRIAL');
         </script>";
    }

}

function insertar_bio(){

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
        location.assign('../views/biotecnologia.php?categoria=BIOTECNOLOGIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/biotecnologia.php?categoria=BIOTECNOLOGIA');
         </script>";
    }

}

function insertar_vet(){

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
        location.assign('../views/veterinaria.php?categoria=VETERINARIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/veterinaria.php?categoria=VETERINARIA');
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

function editar_enfer() {
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
        location.assign('../views/enfermeria.php?categoria=ENFERMERIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/enfermeria.php?categoria=ENFERMERIA');
         </script>";
}

}


function editar_gastro() {
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
        location.assign('../views/gastronomia.php?categoria=GASTRONOMIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/gastronomia.php?categoria=GASTRONOMIA');
         </script>";
}

}

function editar_agro() {
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
        location.assign('../views/agroindustrial.php?categoria=AGROINDUSTRIAL');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/agroindustrial.php?categoria=AGROINDUSTRIAL');
         </script>";
}

}

function editar_bio() {
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
        location.assign('../views/biotecnologia.php?categoria=BIOTECNOLOGIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/biotecnologia.php?categoria=BIOTECNOLOGIA');
         </script>";
}

}

function editar_vet() {
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
        location.assign('../views/veterinaria.php?categoria=VETERINARIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/veterinaria.php?categoria=VETERINARIA');
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


function calculo_enfer() {
    require_once ("db.php");
    extract($_POST);
    $consulta="UPDATE insumo SET  existencia = '$existencia' - '$entregado', entregado = '$entregado' WHERE id = '$id' ";
    $resultado=mysqli_query($conexion, $consulta);

   if($resultado){
        echo "
        <script language='JavaScript'>
        alert('La entrega fue completada ');
        location.assign('../views/enfermeria.php?categoria=ENFERMERIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/enfermeria.php?categoria=ENFERMERIA');
         </script>";
}

}
function calculo_gastro() {
    require_once ("db.php");
    extract($_POST);
    $consulta="UPDATE insumo SET  existencia = '$existencia' - '$entregado', entregado = '$entregado' WHERE id = '$id' ";
    $resultado=mysqli_query($conexion, $consulta);

   if($resultado){
        echo "
        <script language='JavaScript'>
        alert('La entrega fue completada ');
        location.assign('../views/gastronomia.php?categoria=GASTRONOMIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/gastronomia.php?categoria=GASTRONOMIA');
         </script>";
}

}
function calculo_agro() {
    require_once ("db.php");
    extract($_POST);
    $consulta="UPDATE insumo SET  existencia = '$existencia' - '$entregado', entregado = '$entregado' WHERE id = '$id' ";
    $resultado=mysqli_query($conexion, $consulta);

   if($resultado){
        echo "
        <script language='JavaScript'>
        alert('La entrega fue completada ');
        location.assign('../views/agroindustrial.php?categoria=AGROINDUSTRIAL');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/agroindustrial.php?categoria=AGROINDUSTRIAL');
         </script>";
}

}
function calculo_bio() {
    require_once ("db.php");
    extract($_POST);
    $consulta="UPDATE insumo SET  existencia = '$existencia' - '$entregado', entregado = '$entregado' WHERE id = '$id' ";
    $resultado=mysqli_query($conexion, $consulta);

   if($resultado){
        echo "
        <script language='JavaScript'>
        alert('La entrega fue completada ');
        location.assign('../views/biotecnologia.php?categoria=BIOTECNOLOGIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/biotecnologia.php?categoria=BIOTECNOLOGIA');
         </script>";
}

}
function calculo_vet() {
    require_once ("db.php");
    extract($_POST);
    $consulta="UPDATE insumo SET  existencia = '$existencia' - '$entregado', entregado = '$entregado' WHERE id = '$id' ";
    $resultado=mysqli_query($conexion, $consulta);

   if($resultado){
        echo "
        <script language='JavaScript'>
        alert('La entrega fue completada ');
        location.assign('../views/veterinaria.php?categoria=VETERINARIA');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Ocurrio un error inesperado');
         location.assign('../views/veterinaria.php?categoria=VETERINARIA');
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
function delete_user(){
    require_once("db.php");
    extract($_GET);
    $consulta = "DELETE FROM usuarios WHERE id = $id" ;
    $resultado=mysqli_query($conexion, $consulta);
    if($resultado){
        header("location: ../views/usuarios.php");
    }
    else echo("error");
   
}
function editar_datos_usuario(){
    require_once("db.php");
    extract($_POST);
    $passwordq1 = trim($_POST['Password']);
    $hash = password_hash($passwordq1, PASSWORD_DEFAULT, ['cost' => 5]);
    $consulta = "UPDATE usuarios SET nombre = '$nombre', username = '$username', password = '$hash', rol_id = '$rol' WHERE id = $id ";
    $updated = mysqli_query($conexion, $consulta);
    if ($updated){
        header("location: ../views/usuarios.php") ;
    }
    else{
        echo "error";
    }
}


