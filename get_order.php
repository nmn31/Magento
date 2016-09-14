	<?php
	include"config.php";

	class SingleOrder extends Config  {

		public function get_order($order_id){
				
				return $this->_make_api_call($order_id,'orders');
			} 
	}
	$order = new SingleOrder();
	$order_id = $order->order_id;
	$order->get_order($order_id);

 ?>