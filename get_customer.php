<?php
	/*
		This is used to retrieve customer for given id
		@param $customer_id	
	*/	
include"config.php";

class Customer extends Config  {
   
	public function get_customer($customer_id) {
		
		return $this->_make_api_call($customer_id,'customers');
	}
}
$customer = new Customer();
$customer_id = $customer->customer_id;
$customer->get_customer($customer_id);



 ?>