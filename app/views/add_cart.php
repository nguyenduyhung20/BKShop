<?php
	session_start();
	$id_product = $_GET['id_product'];
	//Nếu đã tồn tại sản phẩm trong giỏ hàng thì tăng sl lên 1 đơn vị. Ngược lại, số lượng được gán = 1
	if(isset($_SESSION['cart'][$id_product])){
		$_SESSION['cart'][$id_product]+=1;
	}else{
		$_SESSION['cart'][$id_product]=1;
	}
	header('location: ../../index.php?action=cart');
?>