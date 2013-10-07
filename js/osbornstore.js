$(document).ready(function(){
	$('#onsite-display').click(function(){
		showOnsite();
	});

	$('#all').click(function(){
		checkAll();
	});

	$('#unit_dress').click(function(){
		var unit = $('#unit_dress').val();
		var price = $('#dress_price').html();
		var total = totalPrice(unit, price);
		$('#total_dress').html(total);
	});

	$('#unit_shoe').click(function(){
		var unit = $('#unit_shoe').val();
		var price = $('#shoe_price').html();
		var total = totalPrice(unit, price);
		$('#total_shoe').html(total);
	});

	$('#unit_bag').click(function(){
		var unit = $('#unit_bag').val();
		var price = $('#bag_price').html();
		var total = totalPrice(unit, price);
		$('#total_bag').html(total);
	});

	$('#redirect').click(function(){
		this.form.action = "redirect_checkout.php";
	});

	$('#onsite').click(function(){
		this.form.action = "onsite_checkout.php";
	});
});

function showOnsite(){
	var myValue = $('#onsite-display').prop('checked') ? 1 : 0;
	if (myValue==0) {
		$('.hidden').hide();
	} 

	if (myValue==1){
		$('.hidden').show();
	}
}

function checkAll(){
	var myValue = $('#all').prop('checked') ? 1 : 0;
	if (myValue==0){
		$('.checkbox').prop('checked', false);
	} else {
		$('.checkbox').prop('checked', true);
	}
}

function totalPrice(unitprice, quantity){
	var totalPrice=0;
	totalPrice = unitprice * quantity;
	return totalPrice;
}
