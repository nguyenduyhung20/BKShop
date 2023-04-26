<?php
	$link = mysqli_connect('localhost', 'root', '', 'bkshop');
		$id_product = $_GET['id_product'];
		$sql = "DELETE FROM product WHERE id_product = $id_product";
		$query = mysqli_query($link, $sql);
		header('location: ../../index.php?action=view_product');
?>