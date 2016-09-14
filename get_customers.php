<?php

    /*
		This is used to retrieve All customer 
	*/	
include"config.php";

class Customer extends Config  {
    
	public function get_customers(){
		
		return $this->_make_api_call('','customers.json');
	}
}
$order = new Customer();
$order->get_customers();



 ?>