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
    $this->SetFont('Arial','B',16);
  
    // Movernos a la derecha
    $this->Cell(100);
        // Título
        $this->setY(10); $this->setX(123);

        $this->Cell(70, 10, utf8_decode('UNIVERSIDAD INTERSERRANA DEL ESTADO DE PUEBLA - AHUACATLAN '), 0, 1, 'C');
    
        $this->SetFont('Arial', '', 15);
        $this->setY(20); $this->setX(130);
        $this->Cell(60, 4, utf8_decode('Organismo Publico Descentralizado del Gobierno del Estado de Puebla'), 0, 1, 'C');
    
        $this->SetFont('Arial', 'B', 15);
        $this->setY(26); $this->setX(130);
        $this->Cell(60, 4, 'FORMATO:', 0, 1, 'C');
    
        $this->SetFont('Arial', '', 15);
        $this->setY(31); $this->setX(127);
        $this->Cell(60, 4, utf8_decode('Inventario de reactivos e insumos de unidad medica, cocinas, talleres y laboratorios'), 0, 1, 'C');
    
        
    

    $this->SetFont('Arial', 'B', 17);
    $this->setY(40); $this->SetX(100);

    $this->image('../../img/logo.png', 5, 4, 45);  // X, Y, Tamaño

    $this->Cell(70, 10, 'REPORTE DE ENFERMERIA', 0, 1, 'C');
 
    // Salto de línea
    $this->SetFont('Arial', 'B', 10);
    $this->Ln();
    $this->SetX(20);


    $this->Ln();
    $this->SetFont('Arial','B',10);
    $this->SetY(55);
    $this->SetX(17);

    $this->Cell(25,10,utf8_decode('Entrada'),1,0,'C',0);
    $this->Cell(20,10,utf8_decode('Cantidad'),1,0,'C',0,);
    $this->Cell(20,10,utf8_decode('Unidad'),1,0,'C',0);
    $this->Cell(80,10,utf8_decode('Reactivo/Insumo'),1,0,'C',0);
    $this->Cell(25,10,utf8_decode('Caducidad'),1,0,'C',0);
    $this->Cell(50,10,utf8_decode('Marca'),1,0,'C',0);
    $this->Cell(20,10,utf8_decode('Existencia'),1,1,'C',0);


  
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

    $pdf->Cell(25,10,utf8_decode($row['fecha_entrada']),1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['cantidad']),1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['unidad']),1,0,'C',0);
    $pdf->Cell(80,10,utf8_decode($row['nombre']),1,0,'C',0);
    $pdf->Cell(25,10,utf8_decode($row['fecha_caducidad']),1,0,'C',0);
    $pdf->Cell(50,10,utf8_decode($row['marca']),1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['existencia']),1,1,'C',0);
	


} 
}

// PIE DE PAGINA $pdf->Ln(10); 
$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Ln(20);
$pdf->setY(-33);
$pdf->setX(20);
$pdf->Cell(60,0, 'ELABORO',0,1,'C');

$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Ln(20);
$pdf->setY(-33);
$pdf->setX(50); //CONTINUAR PARA LA DERECHA
$pdf->Cell(60,0, 'REVISO/AUTORIZO',0,1,'C');

$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Ln(20);
$pdf->setY(-33);
$pdf->setX(90); //CONTINUAR PARA LA DERECHA
$pdf->Cell(60,0, 'FECHA DE ACTUALIZACION',0,1,'C');

$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Ln(20);
$pdf->setY(-33);
$pdf->setX(130); //CONTINUAR PARA LA DERECHA
$pdf->Cell(60,0, 'CODIGO',0,1,'C');

$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Ln(20);
$pdf->setY(-33);
$pdf->setX(160); //CONTINUAR PARA LA DERECHA
$pdf->Cell(60,0, 'VERSION',0,1,'C');

$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Ln(20);
$pdf->setY(-33);
$pdf->setX(200); //CONTINUAR PARA LA DERECHA
$pdf->Cell(60,0, 'REQIQUISITO(S)',0,1,'C');

$pdf->setY(-30);//LINEA DIVISORA
$pdf->setX(18);
$pdf->Cell(250,0,'','T');
$pdf->Ln(0);

$pdf->setY(-30);
$pdf->SetFont('Helvetica', '', 7);
$pdf->Ln(3);
$pdf->setX(20);
$pdf->Cell(60,0,'AMC, LCF, MDBZ',0,1,'C');
$pdf->Ln(5);

$pdf->setY(-30);
$pdf->SetFont('Helvetica', '', 7);
$pdf->Ln(3);
$pdf->setX(50);
$pdf->Cell(60,0,'EJL/YNV',0,1,'C');
$pdf->Ln(5);

$pdf->setY(-30);
$pdf->SetFont('Helvetica', '', 7);
$pdf->Ln(3);
$pdf->setX(90);
$pdf->Cell(60,0,''  .utf8_decode(fecha()) ,0,1,'C');
$pdf->Ln(5);

$pdf->setY(-30);
$pdf->SetFont('Helvetica', '', 7);
$pdf->Ln(3);
$pdf->setX(130);
$pdf->Cell(60,0,'AC-FT-004',0,1,'C');
$pdf->Ln(5);

$pdf->setY(-30);
$pdf->SetFont('Helvetica', '', 7);
$pdf->Ln(3);
$pdf->setX(160);
$pdf->Cell(60,0,'03',0,1,'C');
$pdf->Ln(5);

$pdf->setY(-30);
$pdf->SetFont('Helvetica', '', 7);
$pdf->Ln(3);
$pdf->setX(200);
$pdf->Cell(60,0,'7.1.3-8.1',0,1,'C');
$pdf->Ln(5);


	$pdf->Output();
?>