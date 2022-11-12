<!DOCTYPE html>
<html lang="en">

<?php require '../includes/header.php';

    ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'ENFERMERIA'?>">
ENFERMERIA
</a>
<a class="pdf" href="../includes/reporte_cat.php?categoria=<?php echo'ENFERMERIA'?>">
VER PDF- ENFERMERIA
</a>
        </div>
<div class="col-sm-4">
<a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'GASTRONOMIA'?>">
GASTRONOMIA
</a>
<a class="pdf" href="../includes/reporte_cat.php?categoria=<?php echo'GASTRONOMIA'?>">
VER PDF - GASTRONOMIA
</a>
</div>  
<div class="col-sm-4">
<a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'AGROINDUSTRIAL' ?>">
AGROINDUSTRIAL
</a>
<a class="pdf" href="../includes/reporte_cat.php?categoria=<?php echo'AGROINDUSTRIAL'?>">
VER PDF - AGROINDUSTRIAL
</a>
</div>  
</div>
<div class="row">
<div class="col-sm-4">
<a class="catjugueteria" href="productosCategoria.php?categoria=<?php echo 'BIOTECNOLOGIA'?>">
BIOTECNOLOGIA
</a>
<a class="pdf" href="../includes/reporte_cat.php?categoria=<?php echo'BIOTECNOLOGIA'?>">
VER PDF - BIOTECNOLOGIA
</a>
</div>

<div class="col-sm-4">
<a class="catmascotas" href="productosCategoria.php?categoria=<?php echo'VETERINARIA'?>">
VETERINARIA
</a>
<a class="pdf" href="../includes/reporte_cat.php?categoria=<?php echo'VETERINARIA'?>">
VER PDF - VETERINARIA
</a>
</div>
<div class="col-sm-4">
<a class="catautomovilstico" href="productosCategoria.php?categoria=<?php ?>">
...
</a>
<a class="catautomovilstico" href="productosCategoria.php?categoria=<?php ?>">
...
</a>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<a class="catvestimenta" href="productosCategoria.php?categoria=<?php ?>">
...
</a>
</div>
<div class="col-sm-4">
<a class="cattelefonia" href="productosCategoria.php?categoria=<?php ?>">
...
</a>
</div>
<div class="col-sm-4">
<a class="catdeportes" href="productosCategoria.php?categoria=<?php ?>">
...
</a>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>
</body>
<?php require '../includes/footer.php'; ?>
</html>
