<?php
include"config.php";

class Product extends Config  {
	/*
		This is used to retrieve product for given id
		@param $product_id 3548853828
	*/	
	function get_product($product_id){
		
		return $this->_make_api_call($product_id,'products');
	}
}
$product = new Product();
$product_id = $product->product_id;
$product->get_product($product_id);

?>