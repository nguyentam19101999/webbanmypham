<?php 
	require_once  __DIR__. "/autoload/autoload.php";
	
	$key = intval(getInput("key"));
	$qty = intval(getInput("qty"));
	if($qty < 0){
		$error['qty'] = "Số lượng phải lớn hơn 0";
	}
	if(empty($error)){
		$_SESSION['cart'][$key]['qty'] = $qty;
		echo 1;
	}
	else{
		$_SESSION['error'] = "Cập nhật thất bại";
	}
 ?>