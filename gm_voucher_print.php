<?php
require('pdf/fpdf.php');
include("lib/config.php");
include("lib/database.php");
include("lib/helper.php");
$db = new Database();
$fm = new Formate();


if (empty($_GET['gmvid'])){
}elseif(!isset($_GET['gmvid']) || $_GET['gmvid'] == NULL){
	echo 'Something went to wrong';
}else{
		$tid= $_GET['gmvid'];
		$id= preg_replace("/[^0-9a-zA-Z]/", "", $tid);
		$rid = $id;
		}

class PDF extends FPDF {  
	function Footer() {
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','I',7);
		// Page number
		$this->Cell(130,2,'---------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'L'); 
		$this->Cell(70,5,'Software Developed By: Ibrahim Ali, +8801916859326',0,0,'L'); 
		$this->Cell(50,5,'Printing Date: '.date("Y-m-d h:i:sa") ,0,0,'C');
		$this->Cell(10,5,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}			
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm',array(152,152));;// for custome page array(100,150)
$pdf	= new pdf('P','mm',array(152,152));
$pdf->AliasNbPages();
$pdf->AddPage(); 

//set font to arial, bold, 14pt

//set font to arial, regular, 12pt
$pdf->Image('img/logo.png',10,10,30,30);

$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(176,4,4);
$pdf->Cell(80	,10,'',0,1,'R'); //end of line  
$pdf->Cell(80	,10,'Missionpara',0,0,'R'); //end of line  
$pdf->SetTextColor(2,112,38);
$pdf->Cell(40	,10,'Jame-E-Masjid',0,1,'L'); //end of line  

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(35	,6,'',0,0,'L'); //end of line  
$pdf->Cell(180	,6,'Address: 16/41, Missionpara Road,',0,1,'L'); //end of line  
$pdf->Cell(35	,6,'',0,0,'L'); //end of line  
$pdf->Cell(180	,6,'Narayanganj Sadar, Narayanganj',0,1,'L'); //end of line  

$pdf->Cell(180	,5,'',0,1,'C'); 

//show title 
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(2,112,38);
$pdf->Cell(140	,10,'Money Recipt',0,1,'C');

if ($rid==true){ 
	$query="SELECT * FROM subscription_fees WHERE id='$rid'";
	$results=$db->select($query);
if ($results){
	while($rs=$results->fetch_assoc()){

$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(25	,7,'Voucher No :',0,0,'C');
$pdf->Cell(14	,7,'MR-GM-',0,0,'C');
$pdf->Cell(8	,7,$rs['id'],0,1,'L');
$pdf->Cell(24	,7,'Member A/C:',0,0,'L');
$pdf->Cell(20	,7,$rs['members_id'],0,0,'L'); 
$pdf->Cell(20	,7,'Name:',0,0,'C');

			$mmid=$rs['members_id'];
			
			$query2="SELECT * FROM members WHERE member_code='$mmid'";
			$results2=$db->select($query2);
			if ($results2){
			while($rs2=$results2->fetch_assoc()){
				
					$pdf->Cell(65	,7,$rs2['First_name'].' '.$rs2['Last_name'],0,1,'L'); 
				}
			}

 	  }
	}
}	
$pdf->Cell(180	,5,'',0,1,'C'); 
 
//Table Head
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(223,240,216);//Head Color 

$pdf->Cell(45	,5,'Invoice Date',1,0,'C',true);
$pdf->Cell(65	,5,'Description',1,0,'C',true);
$pdf->Cell(25	,5,'Credit',1,1,'C',true); 


//Table Boday 
 
if ($rid==true){ 
	$query="SELECT * FROM subscription_fees WHERE id='$rid'";
	$results=$db->select($query);
if ($results){
	while($rs=$results->fetch_assoc()){

		
		$pdf->Cell(45	,20,$rs['invoice_date'],1,0,'C');
		$pdf->Cell(65	,20,$rs['narration'],1,0,'C');
		$pdf->Cell(25	,20,number_format((float)$rs['credit_amount'], 2, '.', ','),1,1,'C'); 

 
 //End Table Boday 
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(223,240,216);//Head Color 
$pdf->Cell(110	,5,'Total=',1,0,'R',true);
$pdf->Cell(25	,5,number_format((float)$rs['credit_amount'], 2, '.', ','),1,1,'C',true); 
 	  }
	}
}	
	
$pdf->Cell(180	,8,'',0,1,'C'); 
$pdf->Cell(180	,8,'',0,1,'C'); 
$pdf->Cell(30	,4,'--------------------------',0,0,'L');//end of line
$pdf->Cell(100	,4,'----------------------------------',0,1,'R');//end of line
$pdf->Cell(30	,4,'Cashier',0,0,'C');//end of line
$pdf->Cell(96	,4,'Secratary/President',0,0,'R');//end of line


$filename="ec-ledger";
$pdf->Output($filename,'I');  
?>			 			  
			