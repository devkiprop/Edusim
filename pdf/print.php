<?php
require('fpdf17/fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');


class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		$this->Image('logo-small.png',10,10,10);
		
		$this->Cell(100,10,'Exams ',0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',10);
		
		$this->SetFillColor(20, 188, 15);
		$this->SetDrawColor(216, 110, 10);
		$this->Cell(60,5,'EXAM',1,0,'',true);
		$this->Cell(25,5,'EXAM',1,0,'',true);
		$this->Cell(65,5,'EXAM',1,0,'',true);
		$this->Cell(60,5,'EXAM',1,1,'',true);
		
	}
	function Footer()
	{
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

$query=mysqli_query($con,"SELECT exams. exam_name, performance. score, performance. user_id, people. first_name, people. other_names, category. category_name, subjects. subject_name FROM performance INNER JOIN exams ON exams. exam_id = performance. exam_id INNER JOIN people ON performance. user_id = people. user_id INNER JOIN category ON category. category_id = exams. category_id INNER JOIN subjects ON exams. subject_id = subjects. subject_id");



while($data=mysqli_fetch_array($query))
{
	$pdf->Cell(60,5,$data['exam_name'],'LR',0);
	$pdf->Cell(25,5,$data['exam_name'],'LR',0);
	
	if($pdf->GetStringWidth($data['exam_name']) > 65)
	{
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(65,5,$data['exam_name'],'LR',0);
		$pdf->SetFont('Arial','',9);
	}
	else
	{
		$pdf->Cell(65,5,$data['exam_name'],'LR',0);
	}
	$pdf->Cell(60,5,$data['exam_name'],'',1);
}














$pdf->Output();
?>
