<?php


////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
$id = $_GET['id'];
include_once "header.php";
require_once("db.php");
$consulta = "SELECT * FROM insumo WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);

////////////////// VARIABLES DE CONSULTA////////////////////////////////////
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

<form action="functions.php" method="POST">

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">

                    <div class="form-group">
                        <label for="nombre" class="form-label">Fecha Entrada *</label>
                        <input type="date" id="fecha_entrada" name="fecha_entrada" class="form-control" value="<?php echo $usuario['fecha_entrada']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre" class="form-label">Cantidad *</label>
                        <input type="text" id="cantidad" name="cantidad" class="form-control" value="<?php echo $usuario['cantidad']; ?>" required>
                    </div>


                    <div class="form-group">
                        <label for="tipo" class="form-label">Tipo</label>
                        <input type="text" id="tipo" name="tipo" class="form-control" value="<?php echo $usuario['tipo']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="unidad" class="form-label">Unidad/Medida</label>
                        <input type="text" id="unidad" name="unidad" class="form-control" value="<?php echo $usuario['unidad']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="form-label">Reactivo/Insumo *</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $usuario['nombre']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Fecha Caducidad:</label><br>
                        <input type="date" name="fecha_caducidad" id="fecha_caducidad" class="form-control" value="<?php echo $usuario['fecha_caducidad']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nombre" class="form-label">Marca *</label>
                        <input type="text" id="marca" name="marca" class="form-control" value="<?php echo $usuario['marca']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre" class="form-label">Existencia *</label>
                        <input type="text" id="existencia" name="existencia" class="form-control" value="<?php echo $usuario['existencia']; ?>" required>
                    </div>

                    <div class="form-group ">
                        <label>Categoria:</label>
                        <select class="form-control" id="categoria" name="categoria" required>
                            <option <?php echo $usuario['categoria'] === 'categoria' ? "selected='selected' " : "" ?> value="<?php echo $usuario['categoria']; ?>"><?php echo $usuario['categoria']; ?> </option>
                            <?php

                            include("../includes/db.php");
                            //Codigo para mostrar categorias desde otra tabla
                            $sql = "SELECT * FROM categorias ";
                            $resultado = mysqli_query($conexion, $sql);
                            while ($consulta = mysqli_fetch_array($resultado)) {
                                echo '<option value="' . $consulta['nombre'] . '">' . $consulta['nombre'] . '</option>';
                            }

                            ?>
                        </select>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="accion" value="editar_agro">
                    </div>
                    <br>

                    <div class="mb-3">

                        <input type="submit" value="Guardar" id="register" class="btn btn-success">
                        <a href="../views/agroindustrial.php?categoria=AGROINDUSTRIAL" class="btn btn-danger">Cancelar</a>

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
<?php include '../includes/footer.php'; ?>

</html>