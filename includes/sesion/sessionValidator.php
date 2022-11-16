<?php
$error_response = "error";
$success_response = "success";
require_once('../db.php');
if(isset ($_POST['login'])){
$user = $_POST['username'];
$password =  $_POST['password']; 
global $conexion;
$query_login = "SELECT * FROM usuarios WHERE username = '$user'";
$db_consult = mysqli_query($conexion, $query_login);
$row_num = mysqli_num_rows($db_consult);
    if($row_num){
    
        $fetch_result =  mysqli_fetch_assoc($db_consult);
        $user_data = [
            'user' => $fetch_result['username'],
            'password' => $fetch_result['password'],
            'type' => $fetch_result['rol_id']
        ];
            if(password_verify($password, $user_data['password'])){
            session_start();
            $_SESSION['user']=$user_data['user'];
            $_SESSION['type'] =$user_data['type']; 

                if($_SESSION['type'] && $_SESSION['user']){
                    echo json_encode($success_response);
                }
                else{
                    echo json_encode($error_response);
                    session_destroy();
                }
            } 
            else{
                echo json_encode($error_response);
            } 
    }
    else
    {
        echo json_encode($error_response);
    }

}
?>
<?php 


if(isset($_POST['register'])){
    global $conexion;
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['username']) >= 1 && strlen($_POST['conf_password']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['rol']) >= 1 ) {
    
        $nombre = trim($_POST['nombre']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $password2 = trim($_POST['conf_password']);
        $rol = trim($_POST['rol']);

        if(strcmp($password, $password2) !== 0)
        {
            echo "<script language='JavaScript'>
            alert('Error de contraseña');
            location.assign('../../views/usuarios.php');
            </script>";

        }else
        {
            $hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 5]);
            $verifyUser = "SELECT * FROM usuarios where username = '$username'";
            $query = mysqli_query($conexion, $verifyUser);
            if(mysqli_num_rows($query)>0){
                echo "<script language='JavaScript'>
                alert('Error: Usuario duplicado');
                location.assign('../../views/usuarios.php');
                </script>";
            }
           $query = "INSERT INTO usuarios (nombre, username, password, rol_id) values ('$nombre', '$username', '$hash', $rol)"; 
           echo json_encode($query);
           $query = mysqli_query($conexion, $query);
            if($query){
                header("location: ../../views/usuarios.php");
            }
            else{
                echo "<script language='JavaScript'>
                alert('Error');
                location.assign('../../views/usuarios.php');
                </script>";
            }
         
        }


    }
    else {
        echo json_encode($response = [
            "error" => "hubo un problema al crear usuario"
        ]);
    }
}
        

?>