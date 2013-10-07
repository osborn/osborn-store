<?php 
	require ('api_conf.php');
	require ('products.php');

	$co = new MPower_Onsite_Invoice();
	$total_amount = 0;	

	foreach ($products as $value) {
		$co->addItem($value['name'], $value['quantity'], $value['unit_price'], $value['total_price']);
		$total_amount += $value['total_price'];

	};
	$co->setTotalAmount($total_amount);

	if ($co->create($_POST["account_alias"])) {
	  echo $co->getStatus();
	  echo $co->response_text;
	  echo $co->getReceiptUrl();
	} else {
	  echo $co->getStatus();
	  echo $co->response_text;
	}
 ?>

 <html>
 <head>
 	<title>Onsite Checkout</title>
 </head>
 <body>
 	<form method="post" action="charge.php">
		<input type="text" name="confirmation_code" placeholder="Confirmation Code">
		<input type="hidden" value="<?php echo $co->token; ?>" name="opr_token">
		<input type="submit" value="Make Payment">
	</form>
 </body>
 </html>