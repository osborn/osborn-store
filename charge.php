<?php 
	require 'api_conf.php';
	$opr_token = $_POST['opr_token'];
	$confirmation_code = $_POST['confirmation_code'];

	$invoice = new MPower_Onsite_Invoice();

	if($invoice->charge($opr_token,$confirmation_code)) {
	  echo $invoice->getStatus();
	  echo $invoice->response_text;
	  echo "<br/> Reciept Link <a href=\"".$invoice->getReceiptUrl()."\">Download</a>";
	  echo $invoice->getCustomerInfo("name");
	  echo $invoice->getCustomerInfo("email");
	} else {
	  echo $invoice->getStatus();
	  echo $invoice->response_text;
	}
 ?>