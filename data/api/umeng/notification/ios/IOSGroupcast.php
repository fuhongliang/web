<?php
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'IOSNotification.php');

class IOSGroupcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}