<?php 

function SalesProfit($db,$from,$to){
	$slsp="SELECT SUM(price) as sales_price, SUM(purchase_price) as p_price 
			from invoice_details where date>='$from' and date<='$to'"; 
	$slsr=$db->select($slsp);
	if (!empty($slsr)){
		while($sls=$slsr->fetch_assoc()){
				
		$subtotal=$sls['sales_price']-$sls['p_price'];
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
	
?> 