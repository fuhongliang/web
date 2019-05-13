<?php
/**
 * 入口
 *
 *
 *
 * by 33hao 好商城V3  www.haoid.cn 开发
 */
//require_once 'global.php';
//require_once BASE_DATA_PATH.DS.'api'.DS.'smsapi'.DS.'aliyun-dysms-php-sdk'.DS.'api_sdk'.DS.'vendor'.DS.'autoload.php';
//require_once BASE_DATA_PATH.DS.'api'.DS.'smsapi'.DS.'aliyun-dysms-php-sdk'.DS.'api_demo'.DS.'SmsDemo.php';
//
//$sms=new SmsDemo();
//$a=$sms::sendSms('18594286622',['member_name'=>'三爷'],'SMS_165118292');

$site_url = strtolower('http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/index.php')).'/shop/index.php');
//@header('Location: '.$site_url);
include('shop/index.php');

