<?php
require('pdf/fpdf.php');
include("lib/config.php");
include("lib/database.php");
include("lib/helper.php");
$db = new Database();
$fm = new Formate();


if (isset($_POST['submit'])){
	$from 	= $_POST['from'];
	$to 	= $_POST['to'];
}else{
	echo"No Data Found";
}
						
class PDF extends FPDF {  
	function Footer() {   
		$this->SetY(-15); // Arial italic 8
		$this->SetFont('Arial','I',7);	// Page number
		$this->Cell(130,2,'---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'L'); 
		$this->Cell(70,5,'Software Developed By: Ibrahim Ali, +8801916859326',0,0,'L'); 
		$this->Cell(50,5,'Printing Date: '.date("Y-m-d h:i:sa") ,0,0,'R');
		$this->Cell(70,5,'Page '.$this->PageNo().'/{nb}',0,0,'R'); 
	}
}	
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

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
$pdf->Cell(180	,10,'Income and Expenditure Accounts Report',0,1,'C');

//Show Date  
$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(65	,10,'From:',0,0,'R');
$pdf->Cell(30	,10,$from,0,0,'L');
$pdf->Cell(10	,10,'To:',0,0,'L');
$pdf->Cell(20	,10,$to,0,1,'L');

//show title 
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(2,112,38);
$pdf->Cell(180	,10,'Income',0,1,'C');

//income table 
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(223,240,216);
$pdf->Cell(20	,10,'S.L',1,0,'C',true);
$pdf->Cell(120	,10,'Particular',1,0,'C',true);
$pdf->Cell(45	,10,'Amount',1,1,'C',true); 


$query1="SELECT(SELECT SUM(credit_amount) 
	FROM ecms_fees where invoice_date>='$from' and invoice_date<='$to') AS ecms_fees_total,
(SELECT SUM(credit_amount) 
	FROM subscription_fees where invoice_date>='$from' and invoice_date<='$to') AS Members_Fees_Total, 
(SELECT SUM(credit_amount) 
	FROM shop_rent where invoice_date>='$from' and invoice_date<='$to') AS shop_rent_total,
(SELECT SUM(amount) 
	FROM income where date>='$from' and date<='$to') AS Donation_Total";	

$inres=$db->select($query1); 
if ($inres){	 
	while($insw=$inres->fetch_assoc()){ 
	
	$pdf->SetFont('Arial','',12);
	$pdf->SetFillColor(223,240,216);
	$pdf->Cell(20	,7,'1',1,0,'C');
	$pdf->Cell(120	,7,'EC. Members Subscription',1,0,'L');
	$pdf->Cell(45	,7,number_format((float)$insw['ecms_fees_total'], 2, '.', ','),1,1,'C');
	
	$pdf->SetFont('Arial','',12);
	$pdf->SetFillColor(223,240,216);
	$pdf->Cell(20	,7,'2',1,0,'C');
	$pdf->Cell(120	,7,'Members Subscription',1,0,'L');
	$pdf->Cell(45	,7,number_format((float)$insw['Members_Fees_Total'], 2, '.', ','),1,1,'C');
	
	$pdf->SetFont('Arial','',12);
	$pdf->SetFillColor(223,240,216);
	$pdf->Cell(20	,7,'3',1,0,'C');
	$pdf->Cell(120	,7,'Shop Rent',1,0,'L');
	$pdf->Cell(45	,7,number_format((float)$insw['shop_rent_total'], 2, '.', ','),1,1,'C');
	
	$pdf->SetFont('Arial','',12);
	$pdf->SetFillColor(223,240,216);
	$pdf->Cell(20	,7,'4',1,0,'C');
	$pdf->Cell(120	,7,'Donation',1,0,'L');
	$pdf->Cell(45	,7,number_format((float)$insw['Donation_Total'], 2, '.', ','),1,1,'C');
	
	$pdf->SetFont('Arial','B',12);
	$pdf->SetFillColor(223,240,216); 
	$pdf->Cell(140	,7,'Total=',1,0,'R',true);
	$pdf->Cell(45	,7,number_format((float)$insw['ecms_fees_total']+$insw['Members_Fees_Total']+$insw['shop_rent_total']+$insw['Donation_Total'], 2, '.', ','),1,1,'C',true);
 
	}
}
//show title 
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(2,112,38);
$pdf->Cell(180	,10,'Expendetures',0,1,'C');

//income table 
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(223,240,216);
$pdf->Cell(20	,10,'S.L',1,0,'C',true);
$pdf->Cell(120	,10,'Particular',1,0,'C',true);
$pdf->Cell(45	,10,'Amount',1,1,'C',true); 

$query2="SELECT SUM(salary_amount) as amount FROM `salary_payment` where
	invoice_date>= '$from' and invoice_date<= '$to' ";						
	$sares=$db->select($query2); 
	if ($sares){ 
		while($srs=$sares->fetch_assoc()){
	$pdf->SetFont('Arial','',12);
	$pdf->SetFillColor(223,240,216);
	$pdf->Cell(20	,7,'1',1,0,'C');
	$pdf->Cell(120	,7,'Employee Salary',1,0,'L');
	$pdf->Cell(45	,7,number_format((float)$srs['amount'], 2, '.', ','),1,1,'C');
	}
}

$chk="SELECT * FROM expens_head";
$check=$db->select($chk);
$id=1; 
if($check){
	while ($chrs=$check->fetch_assoc()){
	$id++;
	$head_id=$chrs['id'];
		
	$query3="SELECT SUM(amount) as amount FROM `expens` where head_id=$head_id 
	and date>= '$from' and date<= '$to' ";						
	$results3=$db->select($query3);

	if ($results3){	
	 
	while($rsw=$results3->fetch_assoc()){
	$pdf->SetFont('Arial','',12);
	$pdf->SetFillColor(223,240,216);
	$pdf->Cell(20	,7,$id,1,0,'C');
	$pdf->Cell(120	,7,$chrs['expense_head'],1,0,'L');
	$pdf->Cell(45	,7,number_format((float)$rsw['amount'], 2, '.', ','),1,1,'C'); 
		
		
}}}}


function income($db,$from,$to){
	$query ="SELECT(SELECT SUM(credit_amount) 
			FROM ecms_fees where invoice_date>='$from' and invoice_date<='$to') AS ecms_fees_total,
		(SELECT SUM(credit_amount) 
			FROM subscription_fees where invoice_date>='$from' and invoice_date<='$to') AS Members_Fees_Total, 
		(SELECT SUM(credit_amount) 
			FROM shop_rent where invoice_date>='$from' and invoice_date<='$to') AS shop_rent_total,
		(SELECT SUM(amount) 
			FROM income where date>='$from' and date<='$to') AS Donation_Total";
	$results = $db->select($query);
	if ($results){
		while ($row=$results->fetch_assoc()) {
			
		$subtotal=$row['ecms_fees_total']+$row['Members_Fees_Total']+$row['shop_rent_total']+$row['Donation_Total'];
		return $subtotal;
	 
		}
		
	}
}
function expnes($db,$from,$to){
	$query="SELECT (SELECT SUM(amount) AS amount from `expens` 
	where date>= '$from' and date<= '$to') as expense,
	(SELECT SUM(salary_amount) as amount FROM `salary_payment` where
	 invoice_date>= '$from' and invoice_date<= '$to' ) as salary";
	$results = $db->select($query);
	if ($results){
		while ($row=$results->fetch_assoc()) { 
			$subtotal=$row['expense']+$row['salary'];
			return $subtotal; 
		} 
	}
}

$in=income($db,$from,$to);
$ex=expnes($db,$from,$to);

 $total =$in-$ex;  	
	$pdf->SetFont('Arial','B',12);
	$pdf->SetFillColor(223,240,216); 
	$pdf->Cell(140	,7,'Total=',1,0,'R',true);
	$pdf->Cell(45	,7,number_format((float)$ex, 2, '.', ','),1,1,'C',true);
	
	$pdf->SetFont('Arial','B',12);
	$pdf->SetFillColor(252,184,199); 
	$pdf->Cell(140	,7,'Profit Or Loss=',1,0,'R',true);
	$pdf->Cell(45	,7,number_format((float)$total, 2, '.', ','),1,1,'C',true); 

	
	
	
$pdf->Cell(180	,10,'',0,1,'C'); 
$pdf->Cell(180	,10,'',0,1,'C'); 
$pdf->Cell(20	,4,'--------------------------',0,0,'L');//end of line
$pdf->Cell(160	,4,'-------------------------------------------',0,1,'R');//end of line
$pdf->Cell(20	,4,'Signature Cashier',0,0,'L');//end of line
$pdf->Cell(160	,4,'Signature Secratary/President',0,0,'R');//end of line

$filename="Summery-ledger";
$pdf->Output($filename,'I');  
?>			 			  
			