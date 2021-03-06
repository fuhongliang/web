<?php
$server_name = $_SERVER['SERVER_NAME'];
if (strpos($server_name,'test') !== false) {
    define('HOST_URL','http://testweb.ifhu.cn');
}elseif (strpos($server_name,'web') !== false) {
    define('HOST_URL','http://web.ifhu.cn');
} else {
    define('HOST_URL','http://47.111.27.189:2345');
}
$config = array();
$config['base_site_url'] 		= HOST_URL;
$config['shop_site_url'] 		= HOST_URL.'/shop';
$config['cms_site_url'] 		=HOST_URL. '/cms';
$config['microshop_site_url'] 	= HOST_URL.'/microshop';
$config['circle_site_url'] 		= HOST_URL.'/circle';
$config['admin_site_url'] 		=HOST_URL. '/admin';
$config['mobile_site_url'] 		=HOST_URL. '/mobile';
$config['wap_site_url'] 		= HOST_URL.'/wap';
$config['chat_site_url'] 		= HOST_URL.'/chat';
$config['node_site_url'] 		= 'http://172.16.188.10:8090';
$config['delivery_site_url']    = HOST_URL.'/delivery';
$config['upload_site_url']		= HOST_URL.'/data/upload';
$config['resource_site_url']	= HOST_URL.'/data/resource';
$config['version'] 		= '201601130001';
$config['setup_date'] 	= '2019-04-02 16:54:37';
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= 'lm_';
$config['db']['1']['dbhost']       = '47.111.27.189';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'ifhu';
$config['db']['1']['dbpwd']        = 'ifhu';
$config['db']['1']['dbname']       = 'shop';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= '931A_';
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
//$config['redis']['prefix']      	= 'nc_';
//$config['redis']['master']['port']     	= 6379;
//$config['redis']['master']['host']     	= '47.111.27.189';
//$config['redis']['master']['pconnect'] 	= 0;
//$config['redis']['slave']      	    = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = '33hao';
$config['debug'] 			= false;
$config['default_store_id'] = '1';
$config['url_model'] = false;
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://47.111.27.189:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '47.111.27.189';
$config['queue']['port'] = 6379;
$config['cache_open'] = false;
$config['delivery_site_url']    =HOST_URL. '/delivery';
return $config;
