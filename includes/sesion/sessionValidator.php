<?php

require_once('../db.php');
if(isset ($_POST['login'])){
    $user = $_POST['correo'];
    $password =  $_POST['password']; 
    global $conexion;
    $query_login = "SELECT * FROM usuarios WHERE correo = '$user'";
    $db_consult = mysqli_query($conexion, $query_login);
    $row_num = mysqli_num_rows($db_consult);
if($row_num){
   
    $fetch_result =  mysqli_fetch_assoc($db_consult);
    $user_data = [
        'user' => $fetch_result['correo'],
        'password' => $fetch_result['password'],
        'type' => $fetch_result['rol_id']
    ];
    if(password_verify($password, $user_data['password'])){
    session_start();
    $_SESSION['user']=$user_data['user'];
    $_SESSION['type'] =$user_data['type']; 

    if($_SESSION['type'] && $_SESSION['user']){
        header('location: ../../views/index.php');
    }
    else{
        echo json_encode($response = ["error" => '401']);
        session_destroy();
    }
    }  
}
else
{
    echo json_encode($response = ["error" => '401']);
}
}
?>
<?php 


if(isset($_POST['register'])){
    global $conexion;
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['conf_password']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['rol']) >= 1 ) {
    
        $nombre = trim($_POST['nombre']);
        $mail = trim($_POST['correo']);
        $password = trim($_POST['password']);
        $password2 = trim($_POST['conf_password']);
        $rol = trim($_POST['rol']);

        if(strcmp($password, $password2) !== 0)
        {
            echo json_encode($response = ["error" => 'password match']); 

        }else
        {
            $hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 5]);
           $query = "INSERT INTO usuarios (nombre, correo, password, rol_id) values ('$nombre', '$mail', '$hash', $rol)"; 
           echo json_encode($query);
           mysqli_query($conexion, $query);

           echo json_encode($response = [
            "success" => "usuario creado",
            "usuario" => "$mail",
            "contraseña" => "$password"
           ]);
        }


    }
    else {
        echo json_encode($response = [
            "error" => "hubo un problema al crear usuario"
        ]);
    }
}
        

?>