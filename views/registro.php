<?php



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

<body id="page-top">
    <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title" id="exampleModalLabel">Agregar un nuevo usuario</h3>
                    <button type="button" class="btn btn-black" data-dismiss="modal">
					<i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">

             <form  action="../includes/functions.php" method="POST">
                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="No se puede repetir con alguno de la lista...">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                  <label for="rol" class="form-label">Rol de usuario:</label>
                                  <select name="rol" id="rol" class="form-control" required>
                                  <option value="">--Selecciona una opcion--</option>
                                  <option value="1">Administrador</option>
                                  <option value="2">Invitado</option>
                               </select>
                            </div>
                      <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar" id="register" class="btn btn-success">
                               <a href="usuarios.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
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
</html>