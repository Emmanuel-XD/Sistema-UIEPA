
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="body-login">
<div class="container form-controller">
    <div class="row align-items-center master">
    <div class="col-lg-6 div1 d-none d-sm-none d-md-none d-lg-block">
        <img class="logo-img" src="../../img/LOGO UIEPA.png" alt="">
        <p class="logo-img">Sistema De Inventario Para Área De Practica</p>
    </div>
    <div class="col-lg-6 col-sm-12 div2">
        <form  id="loginForm" name="loginData">
            <div id="login" >
                    <div class="container">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-12">
                                <div id="login-box" class="col-md-12">
                                    <form id="login-form" class="form" action="login" method="post">
                                        <br>
                                        <h4 class="text-center">INICIAR SESIÓN</h4>
                                        <br>
                                        <div id="alert">
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Usuario:</label><br>
                                            <input type="text" name="username" id="username" class="form-control" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="password">Contraseña:</label><br>
                                            <input type="password" name="password" id="password" class="form-control" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                        <br>
                                            <input type="submit"class="btn btn-success form-control" value="ingresar" id="loginBtn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    </div>
</div>
</body>
<script src="../../js/login.js"></script>
</html>