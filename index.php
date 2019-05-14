<?php
/**
 * 入口
 *
 *
 *
 * by 33hao 好商城V3  www.haoid.cn 开发
 */

//require_once 'global.php';
//require(BASE_DATA_PATH.DS.'api'.DS.'umeng'.DS.'Umeng.php');
//
//
//$data['app_type']=2;
//if($data['app_type'] == 1)
//{
//    $android=new Umeng("5cc026e64ca357afec000039","ci54rxbqofvnru9mkflfwgz7xm0mrqb0");
//    $android->sendAndroidUnicast($data['device_tokens'],"新订单提示","你有新的订单，请注意查收");
//}elseif ($data['app_type'] == 2)
//{
//    $ios=new Umeng("5cc7bee60cafb2129200044d","l2rod9mlfopywtnjzkucp6sdh8bcbxkv");
//    $ios->sendIOSUnicast('a7e4ead4409aecd0fdb1ae561977292663b33b6902dc17f9e7dab0d41c75de0f',"你有新的订单，请注意查收");
//}
//
//die;
$site_url = strtolower('http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/index.php')).'/shop/index.php');
//@header('Location: '.$site_url);
include('shop/index.php');

