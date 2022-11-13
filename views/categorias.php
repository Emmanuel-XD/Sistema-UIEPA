<!DOCTYPE html>
<html lang="en">

<?php require '../includes/header.php';

    ?>
<body>
    <center>
    <div class="row">
        <div class="col-sm-4">
<a class="ENFERMERIA" href="productosCategoria.php?categoria=<?php echo 'ENFERMERIA'?>">
<img src="../img/enfer.png" width="130px" height="120px" alt="">
ENFERMERIA
</a>
<a class="pdf" href="../includes/reportes/reporte_enfermeria.php?categoria=<?php echo'ENFERMERIA'?>">
VER PDF- ENFERMERIA
</a>
        </div>
<div class="col-sm-4">
<a class="GASTRONOMIA" href="productosCategoria.php?categoria=<?php echo 'GASTRONOMIA'?>">
<img src="../img/gastronomia.jpg" width="130px" height="120px" alt="">
GASTRONOMIA
</a>
<a class="pdf" href="../includes/reportes/reporte_gastronomia.php?categoria=<?php echo'GASTRONOMIA'?>">
VER PDF - GASTRONOMIA
</a>
</div>  
<div class="col-sm-4">
<a class="AGROINDUSTRIAL" href="productosCategoria.php?categoria=<?php echo 'AGROINDUSTRIAL' ?>">
<img src="../img/agroindustrial.jpg" width="130px" height="120px" alt="">
AGROINDUSTRIAL
</a>
<a class="pdf" href="../includes/reportes/reporte_agroindustrial.php?categoria=<?php echo'AGROINDUSTRIAL'?>">
VER PDF - AGROINDUSTRIAL
</a>
</div>  
</div>

<div class="row">
<div class="col-sm-4">
<a class="BIOTECNOLOGIA" href="productosCategoria.php?categoria=<?php echo 'BIOTECNOLOGIA'?>">
<img src="../img/agroindustrial.jpg" width="130px" height="120px" alt="">
BIOTECNOLOGIA
</a>
<a class="pdf" href="../includes/reportes/reporte_biotecnologia.php?categoria=<?php echo'BIOTECNOLOGIA'?>">
VER PDF - BIOTECNOLOGIA
</a>
</div>

<div class="col-sm-4">
<a class="VETERINARIA" href="productosCategoria.php?categoria=<?php echo'VETERINARIA'?>">
<img src="../img/veterinaria.webp" width="130px" height="120px" alt="">
VETERINARIA
</a>
<a class="pdf" href="../includes/reportes/reporte_veterinaria.php?categoria=<?php echo'VETERINARIA'?>">
VER PDF - VETERINARIA
</a>
</div>

</div>
</div>
</center>
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>

</body>
<?php require '../includes/footer.php'; ?>
</html>
