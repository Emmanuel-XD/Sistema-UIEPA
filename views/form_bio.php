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
                                  <select name="unidad" id="unidad" class="form-control" required>
                                  <option value="">--Selecciona una opcion--</option>
                                  <option value="Litros">Litros</option>
                                  <option value="Mililitros">Mililitros</option>
                                  <option value="Piezas">Piezas</option>
                                  <option value="Kg">Kg</option>
                                  <option value="Gr">Gr</option>
                                  <option value="Metros">Metros</option>
                                  <option value="Paquetes">Paquetes</option>
                                  <option value="Rollos">Rollos</option>
                               </select>
                               </div>
                                   </div>

                            <div class="col-sm-6">
                              <div class="mb-3">
                                  <label for="rol" class="form-label">Tipo</label>
                                  <select name="tipo" id="tipo" class="form-control" required>
                                  <option value="">--Selecciona una opcion--</option>
                                  <option value="Reactivos">Reactivos</option>
                                  <option value="Farmacos">Farmacos</option>
                                  <option value="Insumos">Insumos</option>
                                  <option value="Consumibles medicos">Consumibles medicos</option>
                                  <option value="Consumibles laboratorio">Consumibles laboratorio</option>
                                  <option value="Consumibles cocina">Consumibles cocina</option>
                            
                               </select>
                               </div>
                                   </div>
                                   </div>

                                   <div class="row">
                        <div class="col-sm-6">
                       <div class="mb-3">
                        <label for="descripcion" class="form-label">Reactivo/Insumo </label>
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
                         
                                <option value="BIOTECNOLOGIA">BIOTECNOLOGIA</option>

								</select>
                                <input type="hidden" name="accion" value="insertar_bio">
							</div>
                      <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar" id="register" class="btn btn-success">
                               <a href="biotecnologia.php?categoria=BIOTECNOLOGIA" class="btn btn-danger">Cancelar</a>
                               
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