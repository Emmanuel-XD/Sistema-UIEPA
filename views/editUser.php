<?php 

if (isset($_GET['accion'])){
    switch ($_GET['accion']){
        case 'edit_users';
        edit_user();
        break;
    }
}
function edit_user()
{
    global $conexion;
    require_once("../includes/db.php");
    extract($_GET);
    $consulta = "SELECT * FROM usuarios WHERE id = $id";
    $resultado=mysqli_query($conexion, $consulta);
    $usuarios = mysqli_fetch_assoc($resultado);
    include "../includes/header.php";
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="../package/dist/sweetalert2.css">
    
</head>

<form  action="../includes/functions.php" method="POST">

<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
                
                            <div class="form-group">
                            <label for="nombre" class="form-label">nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $usuarios ['nombre']; ?>" required>
                            </div>

                            <div class="form-group">
                            <label for="nombre" class="form-label">Usuario *</label>
                            <input type="text"  id="Usuario" name="Usuario" class="form-control" value="<?php echo $usuarios ['correo']; ?>" required>
                            </div>

                            <div class="form-group">
                            <label for="nombre" class="form-label">Contraseña *</label>
                            <input type="text"  id="Password" name="Password" class="form-control" value="NewPassword"required>
                            </div>
                            <div class="form-group">
                                  <label for="rol" class="form-label">Rol de usuario:</label>
                                  <select name="rol" id="rol" class="form-control" required>
                                  <option value="">--Selecciona una opcion--</option>
                                  <option <?php echo $usuarios ['rol_id']==='1' ? "selected='selected' ": "" ?> value="1">Administrador</option>
                                  <option <?php echo $usuarios ['rol_id']==='2' ? "selected='selected' ": "" ?> value="2">Invitado</option>
                               </select>

                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                <input type="hidden" name="accion" value="editar_datos_usuario">
							</div>
                      <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar" id="register" class="btn btn-success">
                               <a href="../views/usuarios.php" class="btn btn-danger">Cancelar</a>
                               
                            </div><?php }?>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    
</body>
<?php include '../includes/footer.php'; ?>
</html>
