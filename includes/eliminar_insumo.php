<?php


	$id = $_GET['id'];
	require_once ("db.php");
	$query = mysqli_query($conexion,"DELETE FROM insumo WHERE id = '$id'");
	
	header ('Location: ../views/insumo.php?m=1');
?>

