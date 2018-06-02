<?php
session_start();
include_once("conexion.php");
require('./fpdf/fpdf.php');
$querybusqueda = $mysqli->query("SELECT reservas.FechaInicio, reservas.FechaFin, reservas.FechaReserva, reservas.PrecioReserva, usuarios.NombreUsuario 
FROM reservas INNER JOIN usuarios WHERE reservas.Usuario = usuarios.IdUsuario");

// $cantidad = $querybusqueda->num_rows;

// echo "$cantidad";

class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		// $this->Image('assets/waterfall.png',10,10,10);
		
		$this->Cell(100,10,'Lista de Reservas',0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',11);
		
		$this->SetFillColor(35, 168, 124);
		$this->SetDrawColor(35, 168, 124);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(38,5,'Cliente',1,0,'',true);
        $this->Cell(38,5,'Costo',1,0,'',true);
        $this->Cell(38,5,'Fecha de Reserva',1,0,'',true);
		$this->Cell(38,5,'Fecha de Inicio',1,0,'',true);
		$this->Cell(38,5,'Fecha de Fin',1,0,'',true);
		
		
		
	}
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);


$pdf = new PDF();
$pdf->AddPage();
$pdf->Ln(5);
while (($fila=mysqli_fetch_array($querybusqueda))){
$user = $fila['NombreUsuario'];
$costo = $fila['PrecioReserva'];
$fecha = $fila['FechaReserva'];
$fechaini = $fila['FechaInicio'];
$fechafin = $fila['FechaFin'];
$pdf->SetFont('Arial','B',11);
$pdf->setDrawColor(0, 144, 255, 0.98);
$pdf->Cell(38,5, $user,1,0);
$pdf->Cell(38,5, $costo,1,0);
$pdf->Cell(38,5, $fecha,1,0);
$pdf->Cell(38,5, $fechaini,1,0);
$pdf->Cell(38,5, $fechafin,1,0);
$pdf->Ln(5);
}
ob_end_clean();
$pdf->OutPut();
?>