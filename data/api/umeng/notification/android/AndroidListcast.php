<?php
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'AndroidNotification.php');

class AndroidListcast extends AndroidNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "listcast";
		$this->data["device_tokens"] = NULL;
	}

}