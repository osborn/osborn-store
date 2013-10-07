<?php 
	require ('api_conf.php');
	require ('products.php');
	
	$co = new MPower_Checkout_Invoice();
	$total_amount = 0;	

	foreach ($products as $value) {
		$co->addItem($value['name'], $value['quantity'], $value['unit_price'], $value['total_price']);
		$total_amount += $value['total_price'];

	};
	$co->setTotalAmount($total_amount);

	//$co->addTax('VAT (15%)',50);
	//$co->addTax('NHIL (5%)',50);

	if($co->create()) {
	  header("Location: ".$co->getInvoiceUrl());
	}else{
	  echo $co->response_text;
	}
 ?>