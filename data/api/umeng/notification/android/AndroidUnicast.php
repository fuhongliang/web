<?php
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'AndroidNotification.php');

class AndroidUnicast extends AndroidNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}