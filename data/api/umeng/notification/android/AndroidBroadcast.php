<?php
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'AndroidNotification.php');

class AndroidBroadcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}