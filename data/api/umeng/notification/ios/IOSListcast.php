<?php
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'IOSNotification.php');

class IOSListcast extends IOSNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "listcast";
		$this->data["device_tokens"] = NULL;
	}

}