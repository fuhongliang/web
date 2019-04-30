<?php
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'AndroidNotification.php');

class AndroidGroupcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}