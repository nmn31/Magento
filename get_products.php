<?php
include"config.php";

class Products extends Config  {

	/*
	   This is used to retrieve all products
	*/	
	function get_products()	{
		
		return $this->_make_api_call('','products.json');		
	}
	
}
$products = new Products();
$products->get_products();



 ?>