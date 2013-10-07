<?php 
	$total_amount = 0;
	$products = array();

	if (isset($_POST['shoe'])) {
		$quantity = $_POST['select_shoe'];
		$price = 50.99;
		$total_price = $quantity * $price;
		$products[] = array(
			'name' => 'Shoe',
			'quantity' => $quantity,
			'unit_price' => $price,
			'total_price' => $total_price,
			);
	}

	if (isset($_POST['dress'])) {
		$quantity = $_POST['select_dress'];
		$price = 60.99;
		$total_price = $quantity * $price;
		$products[] = array(
			'name' => 'Dress',
			'quantity' => $quantity,
			'unit_price' => $price,
			'total_price' => $total_price,
			);
	}

	if (isset($_POST['bag'])) {
		$quantity = $_POST['select_bag'];
		$price = 70.99;
		$total_price = $quantity * $price;
		$products[] = array(
			'name' => 'Bag',
			'quantity' => $quantity,
			'unit_price' => $price,
			'total_price' => $total_price,
			);
	}
 ?>
