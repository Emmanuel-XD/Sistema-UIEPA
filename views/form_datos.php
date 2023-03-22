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
    <div class="modal fade" id="datos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title" id="exampleModalLabel">Agregar un nuevo insumo</h3>
                    <button type="button" class="btn btn-black" data-dismiss="modal">
					<i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">

             <form  action="../includes/functions.php" method="POST">

             <div class="row">
              <div class="col-sm-6">
                 <div class="mb-3">
                      <label for="nombre" class="form-label">Fecha Entrada</label>
                  <input type="date"  id="fecha_entrada" name="fecha_entrada" class="form-control">
                   </div>
                       </div>
                       
                           
                     <div class="col-sm-6">
                       <div class="mb-3">
                        <label for="descripcion" class="form-label">Cantidad *</label>
                        <input type="text"  id="cantidad" name="cantidad" class="form-control">
                            </div>
                                </div>
                              </div>


                              <div class="row">
                            <div class="col-sm-6">
                              <div class="mb-3">
                                  <label for="rol" class="form-label">Unidad/Medida</label>
                                  <input type="text"  id="unidad" name="unidad" class="form-control">
                                  
                               </div>
                                   </div>

                            <div class="col-sm-6">
                              <div class="mb-3">
                                  <label for="rol" class="form-label">Tipo</label>
                                  <input type="text"  id="tipo" name="tipo" class="form-control">
                                 
                               </div>
                                   </div>
                                   </div>

                                   <div class="row">
                        <div class="col-sm-6">
                       <div class="mb-3">
                        <label for="descripcion" class="form-label">Nombre del: Reactivo/Insumo </label>
                        <input type="text"  id="nombre" name="nombre" class="form-control">
                            </div>
                                </div>
                             

                            
                            <div class="col-sm-6">
                              <div class="mb-3">
                             <label for="nombre" class="form-label">Fecha Caducidad:</label>
                             <input type="date"  id="fecha_caducidad" name="fecha_caducidad" class="form-control">
                                    </div>
                                   </div>
                                   </div>
                                   
                                   <div class="row">
                        <div class="col-sm-6">
                       <div class="mb-3">
                        <label for="descripcion" class="form-label">Marca</label>
                        <input type="text"  id="marca" name="marca" class="form-control">
                            </div>
                                </div>
                              

                            
   
                            <div class="col-sm-6">
                              <div class="mb-3">
                            <label for="nombre" class="form-label">Existencia *</label>
                            <input type="number"  id="existencia" name="existencia" class="form-control" required>
                            </div>
                            </div>
                            </div>

                            <div class="form-group ">
								<label>Categoria:</label>
								<select class="form-control" id="categoria" name="categoria" required >
                                <option value=""><--Selecciona una opcion--></option>
                                <?php

                                include ("../includes/db.php");
                                //Codigo para mostrar categorias desde otra tabla
                                $sql="SELECT * FROM categorias ";
                                $resultado=mysqli_query($conexion, $sql);
                                while($consulta=mysqli_fetch_array($resultado)){
                                    echo '<option value="'.$consulta['nombre'].'">'.$consulta['nombre'].'</option>';
                                }

                                ?>
								</select>
                                <input type="hidden" name="accion" value="insertar_datos">
							</div>
                      <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar" id="register" class="btn btn-success">
                               <a href="insumos.php" class="btn btn-danger">Cancelar</a>
                               
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