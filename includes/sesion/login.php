
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<form  action="validar.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <br>
                            <h3 class="text-center">SISTEMA | UIEPA</h3>
                            <h4 class="text-center">Iniciar Sesion</h4>
                            <br>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="text" name="correo" id="correo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                             <br>
                                <input type="submit"class="btn btn-success btn-md space" value="ingresar">
                                <div id="register-link" class="text-right">
                                    <br>
                              
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