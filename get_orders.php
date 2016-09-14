<?php
include"config.php";

class Orders extends Config  {

	public function get_orders(){
		
		return $this->_make_api_call('','orders.json?status=any&since_id=0000&limit=250');
	}
}
$order = new Orders();
$order->get_orders();

?>