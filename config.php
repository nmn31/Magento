<?php
class Config {

	
		private $apikey 	= 'Enter Your API KEY';
		private $Password 	= 'ENTER Your Password';
		private $siteurl    = "Enter Your Site Url";
		
		
		public $customer_id = "Enter Your on of Shopify CUSTOMER ID here";
		public $product_id  = "Enter Your on of Shopify PtoductID here";
		public $order_id    = "Enter Your on of Shopify orderID here";
		
		
		public function get_url(){
		   $api_url ='https://'.$this->apikey.':'.$this->Password.'@'.$this->siteurl;
		   return  $api_url ;
		}
		
		public function _make_api_call($param,$endpoint){
		
		//Create the API URL using the private app credentials
		if($param!='') {
			$url = $this->get_url().'/admin/'.$endpoint.'/'.$param.'.json';
		} else {
			$url = $this->get_url().'/admin/'.$endpoint;
		}
		$cSomethingiswrong = curl_init(); 
		curl_setopt($cSomethingiswrong ,CURLOPT_URL,$url);
		curl_setopt($cSomethingiswrong ,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($cSomethingiswrong ,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt($cSomethingiswrong ,CURLOPT_HEADER, false); 
		$result=curl_exec($cSomethingiswrong);
		curl_close($cSomethingiswrong);
		//$result = json_decode($result);
		//echo $url;
		echo "<pre>";
		print_r($result);
		return $result;
	}
		
} 