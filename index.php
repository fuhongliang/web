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

//$android=new Umeng("5cc026e64ca357afec000039","ci54rxbqofvnru9mkflfwgz7xm0mrqb0");
//$android->sendAndroidUnicast('a01764f368dccf2a370379f4f908bb1a652a302ced516840077c15e958370bf7',"接单提示","你有新的订单，系统已帮你接单");
//$ios=new Umeng("5cc7bee60cafb2129200044d","l2rod9mlfopywtnjzkucp6sdh8bcbxkv");
//$a=$ios->sendIOSUnicast('54b39ef53589271e1dad75431b7a1b07e925ef07577e04e3b2ddda6a12c0a21a',"你有新的订单，请注意查收");
//var_dump($a);
//die;
$site_url = strtolower('http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/index.php')).'/shop/index.php');
//@header('Location: '.$site_url);
include('shop/index.php');

