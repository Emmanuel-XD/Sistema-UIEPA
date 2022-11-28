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
    <div class="modal fade" id="entrega<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title" id="exampleModalLabel">Nueva Entrega</h3>
                    <button type="button" class="btn btn-black" data-dismiss="modal">
					<i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">

             <form  action="../includes/functions.php" method="POST">
                            <div class="form-group">
                            <input type="hidden" name="existencia" id="existencia"  value="<?php echo $fila['existencia']; ?>">   
                          
                            </div>
                            <div class="form-group">
                            <label for="nombre" class="form-label">Entregando: *</label>
                            <input type="number"  id="entregado" name="entregado" class="form-control"  required>
                            <input type="hidden" name="accion" value="calculo_bio">
                            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">   
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