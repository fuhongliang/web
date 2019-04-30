<?php


require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'android'.DS.'AndroidBroadcast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'android'.DS.'AndroidFilecast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'android'.DS.'AndroidGroupcast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'android'.DS.'AndroidUnicast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'android'.DS.'AndroidFilecast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'android'.DS.'AndroidCustomizedcast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'ios'.DS.'IOSBroadcast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'ios'.DS.'IOSFilecast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'ios'.DS.'IOSGroupcast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'ios'.DS.'IOSUnicast.php');
require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'notification'.DS.'ios'.DS.'IOSCustomizedcast.php');


class Umeng {
	protected $appkey           = NULL;
	protected $appMasterSecret     = NULL;
	protected $timestamp        = NULL;
	protected $validation_token = NULL;

	function __construct() {
		$this->appkey = "5cc026e64ca357afec000039";
		$this->appMasterSecret = "ci54rxbqofvnru9mkflfwgz7xm0mrqb0";
		$this->timestamp = strval(time());
	}

	function sendAndroidUnicast() {
		try {
			$unicast = new AndroidUnicast();
			$unicast->setAppMasterSecret($this->appMasterSecret);
			$unicast->setPredefinedKeyValue("appkey",           $this->$appkey);
			$unicast->setPredefinedKeyValue("timestamp",        $this->timestamp);
			// Set your device tokens here
			$unicast->setPredefinedKeyValue("device_tokens",    "xx"); 
			$unicast->setPredefinedKeyValue("ticker",           "Android unicast ticker");
			$unicast->setPredefinedKeyValue("title",            "Android unicast title");
			$unicast->setPredefinedKeyValue("text",             "Android unicast text");
			$unicast->setPredefinedKeyValue("after_open",       "go_app");
			// Set 'production_mode' to 'false' if it's a test device. 
			// For how to register a test device, please see the developer doc.
			$unicast->setPredefinedKeyValue("production_mode", "true");
			// Set extra fields
			$unicast->setExtraField("test", "helloworld");
			print("Sending unicast notification, please wait...\r\n");
			$unicast->send();
			print("Sent SUCCESS\r\n");
		} catch (Exception $e) {
			print("Caught exception: " . $e->getMessage());
		}
	}


}

