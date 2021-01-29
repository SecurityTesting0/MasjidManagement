<?php
require('pdf/fpdf.php');
include("lib/config.php");
include("lib/database.php");
include("lib/helper.php");
$db = new Database();
$fm = new Formate();


	if (isset($_POST['submit'])){
		$from 			= $_POST['from'];
		$to 			= $_POST['to'];
	} else{
		echo"No Data Found";
	}
						
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

class PDF extends FPDF {  
	function Footer() {   
		$this->SetY(-15); // Arial italic 8
		$this->SetFont('Arial','I',7);	// Page number
		$this->Cell(170,2,'---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'L'); 
		$this->Cell(70,5,'Software Developed By: Ibrahim Ali, +8801916859326',0,0,'L'); 
		$this->Cell(50,5,'Printing Date: '.date("Y-m-d h:i:sa") ,0,0,'R');
		$this->Cell(50,5,'Page '.$this->PageNo().'/{nb}',0,0,'R'); 
	}
}		
$pdf = new FPDF('P','mm','A4');// for custome page array(100,150)
$pdf = new pdf();
$pdf->AliasNbPages();
$pdf->AddPage();
//set font to arial, bold, 14pt

//set font to arial, regular, 12pt
$pdf->Image('img/logo.png',20,10,30,30);

$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(176,4,4);
$pdf->Cell(90	,10,'',0,1,'R'); //end of line  
$pdf->Cell(90	,10,'Mission Para',0,0,'R'); //end of line  
$pdf->SetTextColor(2,112,38);
$pdf->Cell(50	,10,'Jame-E-Masjid',0,1,'L'); //end of line  

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(45	,6,'',0,0,'L'); //end of line  
$pdf->Cell(190	,6,'Address: 16/41, Missionpara Road,',0,1,'L'); //end of line  
$pdf->Cell(45	,6,'',0,0,'L'); //end of line  
$pdf->Cell(190	,6,'Narayanganj Sadar, Narayanganj',0,1,'L'); //end of line  

$pdf->Cell(180	,10,'',0,1,'C'); 

//show title 
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(2,112,38);
$pdf->Cell(180	,10,'Expense Ledger',0,1,'C');

//Show Date  
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(17	,7,'Duration:',0,0,'L');
$pdf->Cell(12	,7,'From:',0,0,'L');
$pdf->Cell(25	,7,$from,0,0,'L');
$pdf->Cell(8	,7,'To:',0,0,'L');
$pdf->Cell(20	,7,$to,0,1,'L');

 
 
//Table Head
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(223,240,216);//Head Color 
$pdf->Cell(10	,10,'S.L',1,0,'C',true);
$pdf->Cell(35	,10,'Invoice Date',1,0,'C',true);
$pdf->Cell(40	,10,'Head',1,0,'C',true);
$pdf->Cell(65	,10,'Narration',1,0,'C',true);
$pdf->Cell(40	,10,'Amount',1,1,'C',true);//end of line


//Table Boday 
$query="SELECT * FROM `expens` where date>= '$from' and date<= '$to' ";						
	$results=$db->select($query);
	$id=0; 
if ($results){	
	while($rs=$results->fetch_assoc()){
	$id++;
				 
$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(10	,6,$id,1,0,'C');
$pdf->Cell(35	,6,$rs['date'],1,0,'C');
//head check 
	$cxid=$rs['head_id'];
	$queryh="SELECT * FROM expens_head where id='$cxid'";
	$ctres=$db->select($queryh);
	if ($ctres==true){
		while($catres=$ctres->fetch_assoc()){
			$pdf->Cell(40	,6,$catres['expense_head'],1,0,'C');
		}
	}else{
		echo "";
	}
//head check 

$pdf->Cell(65	,6,$rs['narration'],1,0,'C');							
$pdf->Cell(40	,6,number_format((float)$rs['amount'], 2, '.', ','),1,1,'C');//end of line

	}
}


//End Table Boday 

$querysum="SELECT SUM(amount) AS amount from `expens` where date>= '$from' and date<= '$to'";
						
$ressum=$db->select($querysum);
	if ($ressum){	
		while($rssu=$ressum->fetch_assoc()){
			$pdf->SetFont('Arial','B',10);
			$pdf->SetTextColor(0,0,0);
			$pdf->SetFillColor(223,240,216);//Head Color 
			$pdf->Cell(150	,10,'Total=',1,0,'R',true);
			$pdf->Cell(40	,10,number_format((float)$rssu['amount'], 2, '.', ','),1,1,'C',true);//end of line
	}
}
	
	/*
$pdf->Cell(180	,10,'',0,1,'C'); 
$pdf->Cell(180	,10,'',0,1,'C'); 
$pdf->Cell(20	,4,'--------------------------',0,0,'L');//end of line
$pdf->Cell(170	,4,'-------------------------------------------',0,1,'R');//end of line
$pdf->Cell(20	,4,'Signature Cashier',0,0,'L');//end of line
$pdf->Cell(170	,4,'Signature Secratary/President',0,0,'R');*/


$filename="ec-ledger";
$pdf->Output($filename,'I');  
?>			 			  
			