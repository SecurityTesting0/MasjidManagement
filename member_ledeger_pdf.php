<?php
require('pdf/fpdf.php');
include("lib/config.php");
include("lib/database.php");
include("lib/helper.php");
$db = new Database();
$fm = new Formate();


	if (isset($_POST['submit'])){
		$member_code	= $_POST['member_code'];
		$from 			= $_POST['from'];
		$to 			= $_POST['to'];
	} else{
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
$pdf->Cell(90	,10,'Missionpara',0,0,'R'); //end of line  
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
$pdf->Cell(180	,10,'General Member Ledger',0,1,'C');

if ($member_code==true){
 
	$query="SELECT * FROM members WHERE member_code='$member_code'";
	$results=$db->select($query);
if ($results){
	while($rs=$results->fetch_assoc()){
		//Show Members Name
		$pdf->SetFont('Arial','B',10);
		$pdf->SetTextColor(0,0,0);
		$pdf->Cell(10	,7,'AC:',0,0,'L');
		$pdf->Cell(20	,7,$rs['member_code'],0,0,'L');
		$pdf->Cell(15	,7,'Name:',0,0,'L');
		$pdf->Cell(70	,7,$rs['First_name'].' '. $rs['Last_name'],0,0,'L');
		$pdf->Cell(25	,7,'Subs. Fees:',0,0,'L');
		$pdf->Cell(20	,7,number_format((float)$rs['fixed'], 2, '.', ','),0,1,'L'); 
	  }
	}
}	
		
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
$pdf->Cell(25	,10,'Invoice No',1,0,'C',true);
$pdf->Cell(25	,10,'Invoice Date',1,0,'C',true);
$pdf->Cell(50	,10,'Particular',1,0,'C',true);
$pdf->Cell(25	,10,'Debit',1,0,'C',true);
$pdf->Cell(25	,10,'Credit',1,0,'C',true); 
$pdf->Cell(30	,10,'Balance',1,1,'C',true);//end of line

	
//Opening Balance
$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(10	,7,'--',1,0,'C');
$pdf->Cell(25	,7,'--',1,0,'C');
$pdf->Cell(25	,7,'--',1,0,'C');
$pdf->Cell(50	,7,'Opening Balance',1,0,'C'); 

$Opquery ="select 
	concat(sum(debit_amount-credit_amount)) as opbalance
	from subscription_fees 
	where 
	invoice_date between '2000-01-01' AND date_sub('$from', INTERVAL 1 DAY) 
	AND members_id='$member_code' "; 
  $getOp=$db->select($Opquery); 
	if ($getOp){
		
		while($oprs=$getOp->fetch_assoc()){ 
	 
		 $balance	=$oprs['opbalance']; 
		  if($balance >=1){
				$pdf->Cell(25	,7,number_format((float)$balance, 2, '.', ','),1,0,'C');
				 
			 }else {
				$pdf->Cell(25	,7,'0',1,0,'C');  
			 }
		if($balance <=0){
			 $pdf->Cell(25	,7,number_format((float)$balance, 2, '.', ','),1,0,'C');
		 }else {
			 $pdf->Cell(25	,7,'0',1,0,'C');
		 }
$pdf->Cell(30	,7,number_format((float)$balance, 2, '.', ','),1,1,'C');//end of line
	}
}
//End Opening Balance

//Table Boday 
$query3="SELECT * FROM `subscription_fees` 
		where members_id='$member_code' 
		and invoice_date>= '$from' and invoice_date<= '$to' "; 	 				
$results3=$db->select($query3);
$id3=0; 
if ($results3){	
	while($rs3=$results3->fetch_assoc()){
	$id3++;
	$inv='MR-GM-';			 
$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(10	,10,$id3,1,0,'C');
$pdf->Cell(25	,10,$inv.$rs3['id'],1,0,'C');
$pdf->Cell(25	,10,$rs3['invoice_date'],1,0,'C');
$pdf->Cell(50	,10,$rs3['narration'],1,0,'C');
$pdf->Cell(25	,10,number_format((float)$rs3['debit_amount'], 2, '.', ','),1,0,'C');
$pdf->Cell(25	,10,number_format((float)$rs3['credit_amount'], 2, '.', ','),1,0,'C'); 

$debit		=$rs3['debit_amount'];
$credit 	=$rs3['credit_amount'];
$balance	+=$debit-$credit;
								
$pdf->Cell(30	,10,number_format((float)$balance, 2, '.', ','),1,1,'C');//end of line

 
	}
}

//End Table Boday 



$filename="ec-ledger";
$pdf->Output($filename,'I');  
?>			 			  
			