<?php


session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

require('../../fpdf/fpdf.php');
include "../fecha.php";
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    //$this->image('', 150, 1, 40); // X, Y, Tamaño
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
  
    // Movernos a la derecha
    $this->Cell(100);

    // Título
    $this->Cell(70,10,'REPORTE DE VETERINARIA' ,0,0,'C');
    // Salto de línea
    $this->SetFont('Arial','B',10);
    $this->Ln(10);
    $this->SetX(110);
    $this->Cell(70,10,'Fecha de impresion: ' .utf8_decode(fecha()) ,0,0,'C');
    
    $this->Ln(30);
    $this->SetFont('Arial','B',10);
    $this->SetX(17);
    $this->Cell(25,10,'Entrada',1,0,'C',0);
    $this->Cell(20,10,'Cantidad',1,0,'C',0,);
    $this->Cell(20,10,'Unidad',1,0,'C',0);
    $this->Cell(80,10,'Reactivo/Insumo',1,0,'C',0);
    $this->Cell(25,10,'Caducidad',1,0,'C',0);
    $this->Cell(50,10,'Marca',1,0,'C',0);
    $this->Cell(20,10,'Existencia',1,1,'C',0);
	

  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
  
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
   //$this->SetFillColor(223, 229,235);
    //$this->SetDrawColor(181, 14,246);
    //$this->Ln(0.5);
}
}

$categoria = $_GET['categoria'];
extract($_POST);
require_once ("../db.php");   
$sql = "SELECT * FROM insumo WHERE categoria = '$categoria'";
$resultado = mysqli_query($conexion, $sql);
if($resultado -> num_rows > 0){


$pdf = new PDF();
$pdf=new PDF('L','mm','letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',0);
//$pdf->SetWidths(array(10, 30, 27, 27, 20, 20, 20, 20, 22));
foreach($resultado as $key => $row ){

    $pdf->SetX(17);

    $pdf->Cell(25,10,$row['fecha_entrada'],1,0,'C',0);
    $pdf->Cell(20,10,$row['cantidad'],1,0,'C',0);
    $pdf->Cell(20,10,$row['unidad'],1,0,'C',0);
    $pdf->Cell(80,10, $row['nombre'],1,0,'C',0);
    $pdf->Cell(25,10, $row['fecha_caducidad'],1,0,'C',0);
    $pdf->Cell(50,10, $row['marca'],1,0,'C',0);
    $pdf->Cell(20,10, $row['existencia'],1,1,'C',0);


} 
}


	$pdf->Output();
?>