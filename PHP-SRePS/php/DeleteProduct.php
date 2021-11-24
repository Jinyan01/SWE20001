<?php
	/*DeleteProduct for PHP-SRePS - used to hide a single product so that new sales cannot
	be added against it and so that it does not show up in reports.*/

	require('product.php');

	$productId = $_GET['ProductId'];

	//Delete the product
	$product = new Product($productId);
	$product->deleteProduct();
?>